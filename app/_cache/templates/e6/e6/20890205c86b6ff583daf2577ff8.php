<?php

/* includes/assets/media.html */
class __TwigTemplate_e6e620890205c86b6ff583daf2577ff8 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images")) {
            // line 2
            echo "\t";
            $this->env->loadTemplate("includes/assets/images.html")->display($context);
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video")) {
            // line 6
            echo "\t";
            $this->env->loadTemplate("includes/assets/video.html")->display($context);
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "html")) {
            // line 10
            echo "\t";
            $this->env->loadTemplate("includes/assets/html.html")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "includes/assets/media.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
