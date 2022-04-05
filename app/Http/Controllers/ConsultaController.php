<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Language;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{

    public function consulta()
    {

        $filmconsulta = DB::select(
        "SELECT count(rental_date) as num, month(rental.rental_date) as mes
        FROM rental 
        WHERE month(rental.rental_date) BETWEEN month('2005-01-01') AND month('2005-12-31')
        GROUP BY month(rental.rental_date)"
        );
        $mesos = [];
        $i = 0;
        foreach ($filmconsulta as $consulta) {
            while ($i < (($consulta->mes) - 1)) {
                array_push($mesos, 0);
                $i++;
            }
            array_push($mesos, $consulta->num);

            $i++;
        }

        $newconsulta = DB::select(
            "SELECT count(customer.customer_id) AS cliente , country.country AS pais
            FROM customer
            INNER JOIN address
            ON customer.address_id = address.address_id
            INNER JOIN city
            ON address.city_id = city.city_id
            INNER JOIN country
            ON city.country_id = country.country_id
            GROUP BY country.country
            ORDER BY country ASC"
        );
        $clientes = [];
        $paises = [];
        foreach ($newconsulta as $consultaa) {
           
            array_push($clientes, $consultaa->cliente);

        }
        foreach ($newconsulta as $consultaa){
            array_push($paises, $consultaa->pais);
        }
       
    
        return view('saki.consultas')
            ->with('mesos', $mesos)
            ->with('clientes', $clientes)
            ->with('paises', $paises)
            ->with('newconsulta', $newconsulta);
    }

    public function pagina1(){

        $tienda = DB::select('SELECT store.store_id as tie from store');
        $titulo= DB::select('SELECT film.title as tit from film');

        return view('saki.filtro1')
        ->with('tienda', $tienda)
        ->with('titulo', $titulo);
    }

    public function infoconsult1(Request $request){

        $infocon = DB::select(
        "SELECT store.store_id as tienda, count(film.film_id) as peli 
         FROM store
         INNER JOIN inventory
         ON store.store_id = inventory.store_id
         INNER JOIN film
         ON inventory.film_id = film.film_id
         INNER JOIN film_category
         ON film.film_id = film_category.film_id
         INNER JOIN category
         ON film_category.category_id = category.category_id
         WHERE store.store_id LIKE '".$request->store_id."' AND film.title LIKE '".$request->title."'
         GROUP BY store.store_id");

        if($infocon){
            $tiendas = [];
            $pelis = [];
            foreach ($infocon as $consultax) {
               
                array_push($tiendas, $consultax->tienda);
    
            }
            foreach ($infocon as $consultax){
                array_push($pelis, $consultax->peli);
            }
            
            return view('saki.resultadon')
            ->with('tiendas', $tiendas)
            ->with('pelis', $pelis)
            ->with('infocon', $infocon);
            }

            else{
                return view('saki.noresult')
                ->with('mensaje', 'No se han encontrado los resultados solicitados');
            }

    }

    public function pagina2(){

        $pais = DB::select(
            "SELECT country.country as cntry FROM country"
        );

        return view('saki.filtro2')
        ->with('pais', $pais);
    }

    public function infoconsult2(){

        $infoconsulta = DB::select(
            "SELECT count(customer.customer_id) AS cliente , country.country AS pais
            FROM customer
            INNER JOIN address
            ON customer.address_id = address.address_id
            INNER JOIN city
            ON address.city_id = city.city_id
            INNER JOIN country
            ON city.country_id = country.country_id
            WHERE country.country LIKE '".$_POST['country']."'
            GROUP BY country.country
            ORDER BY country ASC"
        );
       
        if($infoconsulta){
            $clientes = [];
            $paises = [];
            foreach ($infoconsulta as $consultai) {
               
                array_push($clientes, $consultai->cliente);
    
            }
            foreach ($infoconsulta as $consultai){
                array_push($paises, $consultai->pais);
            }
            
            return view('saki.resultado')
            ->with('clientes', $clientes)
            ->with('paises', $paises)
            ->with('infoconsulta', $infoconsulta);
            }

            else{
                return view('saki.noresult')
                ->with('mensaje', 'No se han encontrado los resultados solicitados');
            }
        }
}
