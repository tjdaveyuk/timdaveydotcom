<?php

/* includes/navigation/pagination-blog.html */
class __TwigTemplate_83b392e46d9b561ba2efc7b575dd5fc5 extends Twig_Template
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
\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "previous_sibling"));
            foreach ($context['_seq'] as $context["_key"] => $context["prev_link"]) {
                // line 4
                echo "\t\t";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "is_first")) {
                    // line 5
                    echo "\t\t\t";
                    // line 6
                    echo "\t\t";
                } else {
                    // line 7
                    echo "\t\t\t<a class=\"pagination-item";
                    if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "is_last")) {
                        echo " pagination-item-full-width";
                    }
                    echo "\" href=\"";
                    echo $this->getAttribute((isset($context["prev_link"]) ? $context["prev_link"] : null), "url");
                    echo "\">

\t\t\t<h2>&#8592 ";
                    // line 9
                    echo $this->getAttribute((isset($context["prev_link"]) ? $context["prev_link"] : null), "title");
                    echo "</h2></a>
\t\t";
                }
                // line 11
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prev_link'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "
\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_sibling"));
            foreach ($context['_seq'] as $context["_key"] => $context["next_link"]) {
                // line 14
                echo "\t\t";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "is_last")) {
                    // line 15
                    echo "\t\t\t";
                    // line 16
                    echo "\t\t";
                } else {
                    // line 17
                    echo "\t\t\t<a class=\"pagination-item";
                    if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "is_first")) {
                        echo " pagination-item-full-width";
                    }
                    echo "\" href=\"";
                    echo $this->getAttribute((isset($context["next_link"]) ? $context["next_link"] : null), "url");
                    echo "\">
\t\t\t<h2>";
                    // line 18
                    echo $this->getAttribute((isset($context["next_link"]) ? $context["next_link"] : null), "title");
                    echo " &#8594</h2></a>
\t\t";
                }
                // line 20
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['next_link'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 21
            echo "</section>

";
        }
        // line 24
        echo "

";
    }

    public function getTemplateName()
    {
        return "includes/navigation/pagination-blog.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
