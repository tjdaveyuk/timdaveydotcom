<?php

/* journal.html */
class __TwigTemplate_101b8b8eb57c9fcfed67fc77ccc93ec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<section class=\"";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name");
        echo "\">
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "paginated_items"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "\t\t<section class=\"post-preview\">
\t\t\t<a class=\"overlay\" href=\"";
            // line 10
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url");
            echo "\">
\t\t\t\t<figure class=\"media  post-thumb\" style=\"background-image: url('";
            // line 11
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "time_string")) {
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "time_string");
            } else {
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image"), "time_string");
            }
            echo "')\">
\t\t\t\t<div class=\"post-overlay\">
\t        \t\t\t<h1 class=\"overlay\">";
            // line 13
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
            echo "<br/>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date");
            echo "</h1>
\t     \t\t</div>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</section>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "</section>

";
    }

    public function getTemplateName()
    {
        return "journal.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
