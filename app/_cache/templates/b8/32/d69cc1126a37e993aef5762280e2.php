<?php

/* includes/modules/thumbs.html */
class __TwigTemplate_b832d69cc1126a37e993aef5762280e2 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name");
        echo "\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "paginated_items"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "  <section class=\"post-preview\">
    <a class=\"overlay\" href=\"";
            // line 4
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url");
            echo "\">
      <figure class=\"media  post-thumb\" style=\"background-image: url('";
            // line 5
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "time_string")) {
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "time_string");
            } else {
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image"), "time_string");
            }
            echo "')\">
              <div class=\"post-overlay\">
        <h1 class=\"overlay\">";
            // line 7
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
            echo "<br/>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date");
            echo "</h1>
      </div>
      </figure>
    </a>
  </section>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "</section>
";
        // line 14
        $this->env->loadTemplate("includes/navigation/pagination.html")->display($context);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "includes/modules/thumbs.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
