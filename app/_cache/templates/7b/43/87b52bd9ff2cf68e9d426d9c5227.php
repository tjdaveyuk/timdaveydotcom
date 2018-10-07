<?php

/* includes/assets/image-markup.html */
class __TwigTemplate_7b4387b52bd9ff2cf68e9d426d9c5227 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<figure class=\"media";
        if ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "layout")) {
            echo "  media-layout  media-layout--";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "layout");
        } else {
            echo " media-layout--single ";
        }
        echo "\">

\t<img class=\"image\" src=\"";
        // line 3
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "time_string");
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name");
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width");
        echo "\" height=\"";
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height");
        echo "\"/>

\t";
        // line 6
        echo "\t";
        if (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "caption") && ((isset($context["display_caption"]) ? $context["display_caption"] : null) == true))) {
            // line 7
            echo "\t<figcaption class=\"media__caption\">
\t\t<p>";
            // line 8
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "caption");
            echo "</p>
\t</figcaption>
\t";
        }
        // line 11
        echo "
</figure>";
    }

    public function getTemplateName()
    {
        return "includes/assets/image-markup.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
