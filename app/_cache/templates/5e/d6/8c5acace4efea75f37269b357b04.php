<?php

/* work.html */
class __TwigTemplate_5ed68c5acace4efea75f37269b357b04 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<section class=\"";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name");
        echo "\">
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "paginated_items"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "\t\t<section class=\"post-preview\" style=\"background-color:#";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "background_color");
            echo ";\">
\t\t\t<a class=\"overlay\" href=\"";
            // line 9
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url");
            echo "\"\">
\t\t\t\t<figure class=\"media  project-thumb\" style=\"background-image: url('";
            // line 10
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "time_string")) {
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "time_string");
            } else {
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image"), "time_string");
            }
            echo "')\">
\t\t\t\t</figure>
\t\t\t</a>
\t\t</section>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "</section>

";
        // line 17
        $this->env->loadTemplate("includes/navigation/pagination.html")->display($context);
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "work.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
