<?php

/* includes/navigation/pagination.html */
class __TwigTemplate_cac34aa4d0c603ca216de182371a9d29 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings")) {
            // line 2
            echo "<section class=\"pagination\">
  ";
            // line 3
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_page")) {
                // line 4
                echo "    <a class=\"pagination-item";
                if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prev_page") == null)) {
                    echo " pagination-item-full-width";
                }
                echo "\" href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_page");
                echo "\">
    <h2>&#8592 Older Posts</h2></a>
    ";
            }
            // line 7
            echo "    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prev_page")) {
                // line 8
                echo "    <a class=\"pagination-item";
                if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_page") == null)) {
                    echo " pagination-item-full-width";
                }
                echo "\" href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prev_page");
                echo "\">
    <h2>Recent Posts &#8594</h2></a>
  ";
            }
            // line 11
            echo "</section>
";
        }
    }

    public function getTemplateName()
    {
        return "includes/navigation/pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
