<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_21618880e8a2979995fb3aaa4cf915949ddb71952e983a313701297defd7c8e9 extends Twig_Template
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
        $__internal_a39a08c4739d1e2d9ee9028185cb2b52504b6a6115d4178820a7102209280b1d = $this->env->getExtension("native_profiler");
        $__internal_a39a08c4739d1e2d9ee9028185cb2b52504b6a6115d4178820a7102209280b1d->enter($__internal_a39a08c4739d1e2d9ee9028185cb2b52504b6a6115d4178820a7102209280b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a39a08c4739d1e2d9ee9028185cb2b52504b6a6115d4178820a7102209280b1d->leave($__internal_a39a08c4739d1e2d9ee9028185cb2b52504b6a6115d4178820a7102209280b1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
