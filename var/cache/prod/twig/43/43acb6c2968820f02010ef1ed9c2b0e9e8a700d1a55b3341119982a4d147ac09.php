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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
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
<body >
  <title>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "</title>
<boyd>
<h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "</h1>
";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "
<img src=\"https://image.tmdb.org/t/p/w1280/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
        echo "\" alt=\"banner\">
<img src= \"https://image.tmdb.org/t/p/w150/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()), "html", null, true);
        echo "\" alt=\"poster\">
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trailer"]) {
            // line 21
            echo "
<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "key", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trailer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "


    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function() {
           
            var rating = ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo ";


            \$(\"#";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\").click(function() {
                alert(\$(\"#c1\").val(data.rating));
            });
            \$(\".counter\").text(rating);



            \$(\"#";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 1,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\").val(data.rating);

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
        return array (  123 => 50,  112 => 42,  102 => 35,  96 => 32,  88 => 27,  83 => 24,  75 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  47 => 14,  38 => 12,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" crossorigin="anonymous">*/
/*     <link rel="stylesheet" href="{{asset('star/jquery.rateyo.min.css')}}" rel="stylesheet" />*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* */
/* */
/* </head>*/
/* <div><div id="{{params.id}}" class="rateyo-readonly-widg"></div>calificaci&oacute;n: {{params.vote_average}}  <div>total votos: {{params.vote_count}}</div> </div>*/
/* <body >*/
/*   <title>{{params.title}}</title>*/
/* <boyd>*/
/* <h1>{{params.title}}</h1>*/
/* {{params.overview}}*/
/* <img src="https://image.tmdb.org/t/p/w1280/{{params.backdrop_path}}" alt="banner">*/
/* <img src= "https://image.tmdb.org/t/p/w150/{{params.poster_path}}" alt="poster">*/
/* {%for trailer in params.results%}*/
/* */
/* <iframe width="560" height="315" src="https://www.youtube.com/embed/{{trailer.key}}" frameborder="0" allowfullscreen></iframe>*/
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
/*             $("#{{params.id}}").click(function() {*/
/*                 alert($("#c1").val(data.rating));*/
/*             });*/
/*             $(".counter").text(rating);*/
/* */
/* */
/* */
/*             $("#{{params.id}}").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 1,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#{{params.id}}").val(data.rating);*/
/* */
/*             });*/
/*             */
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
