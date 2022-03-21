<?php //>

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*class ReservationController extends AbstractController
{
    /*
    *@Route(" /reservation" , name="reservation")
    *@return Response
    */
class ReservationController extends AbstractController
{

     /**
     * var Environment
     */
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig ;
    }
    
    public function resa(): Response
    {

        return new Response($this->render('reservation/resa.html.twig'));

       

    }
    
}
