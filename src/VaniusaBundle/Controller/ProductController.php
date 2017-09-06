<?php
namespace VaniusaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use VaniusaBundle\Entity\Product;

class ProductController extends Controller
{
    public function getAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('VaniusaBundle:Product')->findAll();
        if ($products === null) {
            return new JsonResponse(["error" => "No existe ningun producto en la BBDD"], Response::HTTP_NOT_FOUND);
        }
        $normalizer = array(new ObjectNormalizer());
        $encoder = array(new JsonEncoder());
        $serializer = new Serializer($normalizer, $encoder);
        $productos_json = $serializer->normalize($products);


        return new JsonResponse($productos_json, Response::HTTP_OK);
    }

    public function singleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('VaniusaBundle:Product')->find($id);
        if ($product === null) {
            return new JsonResponse(["error" => "Producto con este ID no encontrado"], Response::HTTP_NOT_FOUND);
        }
        $normalizer = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizer, array(new JsonEncoder()));
        return new JsonResponse($serializer->normalize($product), Response::HTTP_OK);
    }

    public function postAction(Request $request)
    {
        $product = new Product();
        $nombre = $request->get('nombre');
        $categoria = $request->get('categoria');
        $descripcion = $request->get('descripcion');
        $precio = $request->get('precio');
        if (empty($nombre) || empty($categoria) || empty($descripcion) || empty($precio)) {
            return new JsonResponse(["error" => "Los campos NO pueden estar vacios"], Response::HTTP_NOT_FOUND);
        }
        $product->setNombre($nombre);
        $product->setDescripcion($descripcion);
        $product->setCategoria($categoria);
        $product->setPrecio($precio);
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new JsonResponse(["Nuevo producto guardado satisfactoriamente"], Response::HTTP_CREATED);
    }

    public function updateAction($id, Request $request)
    {
        $nombre = $request->get('nombre');
        $categoria = $request->get('categoria');
        $descripcion = $request->get('descripcion');
        $precio = $request->get('precio');
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('VaniusaBundle:Product')->find($id);

        if (empty($product)) {
            return new JsonResponse(["error" => "producto con este ID no existe"], Response::HTTP_NOT_FOUND);
        } elseif (!empty($nombre) && !empty($categoria) && !empty($descripcion) && !empty($precio)) {
            $product->setNombre($nombre);
            $product->setDescripcion($descripcion);
            $product->setCategoria($categoria);
            $product->setPrecio($precio);
            $em->flush();
            return new JsonResponse(["El producto se ha actualizado satisfactoriamente"], Response::HTTP_OK);
        }
        return new JsonResponse(["error" => "Los campos NO pueden estar vacios"], Response::HTTP_NOT_FOUND);
    }

    public function deleteAction($id)
    {
        $product = new Product();
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('VaniusaBundle:Product')->find($id);
        if (empty($product)) {
            return new JsonResponse(["error" => "El producto con este ID no existe"], Response::HTTP_NOT_FOUND);
        } else {
            $em->remove($product);
            $em->flush();
            return new JsonResponse(["El producto se ha borrado satisfactoriamente"], Response::HTTP_OK);
        }
    }
}

