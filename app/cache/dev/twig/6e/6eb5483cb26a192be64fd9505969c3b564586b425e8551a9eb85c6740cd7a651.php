<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_fbc453ed9ce1ef5ec62bfc7dec805d0774685b035c21fa6bc085dcb6988ee197 extends Twig_Template
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
        $__internal_78d4d930e6e5178a754ad72e3c4c8a183a05e27178875d51d81d6538cdeaaadd = $this->env->getExtension("native_profiler");
        $__internal_78d4d930e6e5178a754ad72e3c4c8a183a05e27178875d51d81d6538cdeaaadd->enter($__internal_78d4d930e6e5178a754ad72e3c4c8a183a05e27178875d51d81d6538cdeaaadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_78d4d930e6e5178a754ad72e3c4c8a183a05e27178875d51d81d6538cdeaaadd->leave($__internal_78d4d930e6e5178a754ad72e3c4c8a183a05e27178875d51d81d6538cdeaaadd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */