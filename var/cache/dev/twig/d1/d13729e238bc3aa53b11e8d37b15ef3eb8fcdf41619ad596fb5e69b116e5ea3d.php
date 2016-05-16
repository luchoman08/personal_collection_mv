<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_aed6f25739d384af109a199f63734f58f4b8506685c55361cda3d1040125cd29 extends Twig_Template
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
        $__internal_ea2d876be4d1344ba039da77c5e1d4b6e1d850515b7f3604ace5a7197ead39b2 = $this->env->getExtension("native_profiler");
        $__internal_ea2d876be4d1344ba039da77c5e1d4b6e1d850515b7f3604ace5a7197ead39b2->enter($__internal_ea2d876be4d1344ba039da77c5e1d4b6e1d850515b7f3604ace5a7197ead39b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ea2d876be4d1344ba039da77c5e1d4b6e1d850515b7f3604ace5a7197ead39b2->leave($__internal_ea2d876be4d1344ba039da77c5e1d4b6e1d850515b7f3604ace5a7197ead39b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
