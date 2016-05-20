<?php

/* APITheMovieDataBaseBundle:Default:mostrarPelicula.html.twig */
class __TwigTemplate_1b1c0195ac5e8e075108826bbda65cb8940dff1379a12860c787e7489a14e840 extends Twig_Template
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
        echo "<!DOCTYPE HTML>

<html>
 <head>
    <!-- Latest compiled and minified CSS -->
   <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/calificacion/star.css"), "html", null, true);
        echo "\">
   <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/calificacion/star.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
</head>   
<title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "</title>
<boyd>
<h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "</h1>
";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "
<img src=\"https://image.tmdb.org/t/p/w185/";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
        echo "\" alt=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo ">

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trailer"]) {
            // line 17
            echo "<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "key", array()), "html", null, true);
            echo " width=\"480\" height=\"390\" frameborder=\"0\"></iframe></p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trailer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<div class=\"rateyo-readonly-widg\"></div>
</body>

    <script>
        \$(function() {

            var rating = 3;


            \$(\"#c1\").click(function() {
                rating=0;
                alert(\$(\"#c1\").val());
            });
            \$(\".counter\").text(rating);



            \$(\".rateyo-readonly-widg\").rateYo({
                readOnly: false,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 5
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#c1\").val(data.rating);

            });
        });
    </script>
</html>";
    }

    public function getTemplateName()
    {
        return "APITheMovieDataBaseBundle:Default:mostrarPelicula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  60 => 17,  56 => 16,  49 => 14,  45 => 13,  41 => 12,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* */
/* <html>*/
/*  <head>*/
/*     <!-- Latest compiled and minified CSS -->*/
/*    <link rel="stylesheet" href="{{asset('assets/css/calificacion/star.css')}}">*/
/*    <script src="{{asset('assets/js/calificacion/star.js')}}"></script>*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* </head>   */
/* <title>{{params.title}}</title>*/
/* <boyd>*/
/* <h1>{{params.title}}</h1>*/
/* {{params.overview}}*/
/* <img src="https://image.tmdb.org/t/p/w185/{{params.backdrop_path}}" alt={{params.title}}>*/
/* */
/* {%for trailer in params.results%}*/
/* <p><iframe title="YouTube video player" src="https://www.youtube.com/embed/"{{trailer.key}} width="480" height="390" frameborder="0"></iframe></p>*/
/* */
/* {%endfor%}*/
/* <div class="rateyo-readonly-widg"></div>*/
/* </body>*/
/* */
/*     <script>*/
/*         $(function() {*/
/* */
/*             var rating = 3;*/
/* */
/* */
/*             $("#c1").click(function() {*/
/*                 rating=0;*/
/*                 alert($("#c1").val());*/
/*             });*/
/*             $(".counter").text(rating);*/
/* */
/* */
/* */
/*             $(".rateyo-readonly-widg").rateYo({*/
/*                 readOnly: false,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 5*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#c1").val(data.rating);*/
/* */
/*             });*/
/*         });*/
/*     </script>*/
/* </html>*/
