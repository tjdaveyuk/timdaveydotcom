<?php

/* includes/modules/header.html */
class __TwigTemplate_970c91317789bc84ba9b571c3d617d51 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<header>
\t<div class=\"wrap\">
\t\t<a class=\"id\" href=\"/index\">Tim Davey</a>
\t\t<nav>
\t\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 7
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "is_current") == true)) {
                // line 8
                echo "\t\t\t\t\t<a class='current'>";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 10
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                echo "\">";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                echo "</a>
\t\t\t\t";
            }
            // line 11
            echo " 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "\t\t</nav>
\t";
        // line 15
        echo "\t\t<nav class=\"touch\">
\t\t\t<div class=\"burger-bg\"></div>
\t\t\t<div class=\"burger\">☰</div>
\t\t\t\t<div class=\"items\">
\t\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 20
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "is_current") == true)) {
                // line 21
                echo "\t\t\t\t\t\t<a><h1 class=\"current\">";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                echo "</h1></a>
\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                echo "\"><h1>";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                echo "</h1></a>
\t\t\t\t\t\t";
            }
            // line 24
            echo " 
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t\t\t\t</div>
\t\t</nav>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "includes/modules/header.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
