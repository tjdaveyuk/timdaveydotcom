<?php

/* includes/assets/video.html */
class __TwigTemplate_8a7b493d702ad0a601052f5a10b034ab extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 2
            echo "\t<video class=\"video\" controls preload=\"auto\">
\t\t<source src=\"";
            // line 3
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url");
            echo "\" type='video/mp4'>
\t\t<!--<source src=\"";
            // line 4
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url");
            echo "\" type='video/webm'>-->
\t</video>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "includes/assets/video.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
