<?php

/* mostrarPelicula.html.twig */
class __TwigTemplate_7a84e92db61bf06ceeda31184512e7d08db500cdcbe188b10243f97fd17a9320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>


</head>
<div><div id=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\" class=\"rateyo-readonly-widg\"></div>calificaci&oacute;n: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo "  <div>total votos: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_count", array()), "html", null, true);
        echo "</div> </div>
<div id=\"calificacion\" class =\"rateyo-readonly-widg\"> </div>
<div>mi calificaci&oacute;n</div>
<body >
    
  <title>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "</title>
<h2>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : null), "html", null, true);
        echo " </h2>
<h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "</h1>
";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "
<button type=\"submit\" class=\"btn btn-default\">Marcar como vista</button>
<button type=\"submit\" class=\"btn btn-default\">Adicionar a una lista</button>
<img src=\"https://image.tmdb.org/t/p/w1280/";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
        echo "\" alt=\"banner\">
<img src= \"https://image.tmdb.org/t/p/w150/";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()), "html", null, true);
        echo "\" alt=\"poster\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trailer"]) {
            // line 26
            echo "
<iframe width=\"560\"  height=\"315\" src=\"https://www.youtube.com/embed/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "key", array()), "html", null, true);
            echo "?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trailer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "


    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function() {
           
            var rating = ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo ";


           \$(\"#calificacion\").click(function() {
                alert(\$(\"#calificacion\").val());
            });
            \$(\".counter\").text(rating);


            //puntuacion de usuarios de the movie database
            \$(\"#";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 1,
                minValue: 1,
                maxValue: 10,
                 multiColor: {
 
      \"startColor\": \"#FF0000\", //RED
      \"endColor\"  : \"#00FF00\"  //GREEN
    }
                
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\").val(data.rating);

            });
            
                //puntuacion del usuario actual
            \$(\"#calificacion\").rateYo({
                readOnly: false,
                rating: rating,
                numStars: 10,
                precision: 1,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#calificacion\").val(data.rating);

            });
             
 
          
        });
    </script>


    <!-- Latest compiled and minified JavaScript -->
    <script src=\"bootstrap/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "mostrarPelicula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 61,  117 => 47,  104 => 37,  96 => 32,  91 => 29,  83 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  62 => 20,  58 => 19,  54 => 18,  50 => 17,  38 => 12,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" crossorigin="anonymous">*/
/*     <link rel="stylesheet" href="{{asset('star/jquery.rateyo.min.css')}}" rel="stylesheet" />*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* */
/* */
/* </head>*/
/* <div><div id="{{params.id}}" class="rateyo-readonly-widg"></div>calificaci&oacute;n: {{params.vote_average}}  <div>total votos: {{params.vote_count}}</div> </div>*/
/* <div id="calificacion" class ="rateyo-readonly-widg"> </div>*/
/* <div>mi calificaci&oacute;n</div>*/
/* <body >*/
/*     */
/*   <title>{{params.title}}</title>*/
/* <h2>{{usuario}} </h2>*/
/* <h1>{{params.title}}</h1>*/
/* {{params.overview}}*/
/* <button type="submit" class="btn btn-default">Marcar como vista</button>*/
/* <button type="submit" class="btn btn-default">Adicionar a una lista</button>*/
/* <img src="https://image.tmdb.org/t/p/w1280/{{params.backdrop_path}}" alt="banner">*/
/* <img src= "https://image.tmdb.org/t/p/w150/{{params.poster_path}}" alt="poster">*/
/* {%for trailer in params.results%}*/
/* */
/* <iframe width="560"  height="315" src="https://www.youtube.com/embed/{{trailer.key}}?rel=0" frameborder="0" allowfullscreen></iframe>*/
/* {%endfor%}*/
/* */
/* */
/* */
/*     <script type="text/javascript" src="{{asset('star/jquery.rateyo.min.js')}}"></script>*/
/* */
/*     <script>*/
/*         $(function() {*/
/*            */
/*             var rating = {{params.vote_average}};*/
/* */
/* */
/*            $("#calificacion").click(function() {*/
/*                 alert($("#calificacion").val());*/
/*             });*/
/*             $(".counter").text(rating);*/
/* */
/* */
/*             //puntuacion de usuarios de the movie database*/
/*             $("#{{params.id}}").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 1,*/
/*                 minValue: 1,*/
/*                 maxValue: 10,*/
/*                  multiColor: {*/
/*  */
/*       "startColor": "#FF0000", //RED*/
/*       "endColor"  : "#00FF00"  //GREEN*/
/*     }*/
/*                 */
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#{{params.id}}").val(data.rating);*/
/* */
/*             });*/
/*             */
/*                 //puntuacion del usuario actual*/
/*             $("#calificacion").rateYo({*/
/*                 readOnly: false,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 1,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#calificacion").val(data.rating);*/
/* */
/*             });*/
/*              */
/*  */
/*           */
/*         });*/
/*     </script>*/
/* */
/* */
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
