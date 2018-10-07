<?php

/* includes/assets/images.html */
class __TwigTemplate_4c3d8114ddeff1ae93c4c111937611a4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "reverse")) {
            // line 3
            echo "\t";
            $context["images"] = twig_reverse_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images"));
        } else {
            // line 5
            echo "\t";
            $context["images"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images");
        }
        // line 7
        echo "\t
\t

";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 12
            echo "
\t";
            // line 14
            echo "\t";
            $this->env->loadTemplate("includes/assets/image-markup.html")->display(array_merge($context, array("display_caption" => true)));
            // line 15
            echo "
\t";
            // line 17
            echo "\t";
            if ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "content")) {
                // line 18
                echo "\t<div class=\"page-content  page-content--mid-flow\">
\t\t";
                // line 19
                echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "content");
                echo "
\t</div>
\t";
            }
            // line 22
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "includes/assets/images.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
