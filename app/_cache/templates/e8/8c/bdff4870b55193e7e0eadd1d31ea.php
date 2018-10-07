<?php

/* project.html */
class __TwigTemplate_e88cbdff4870b55193e7e0eadd1d31ea extends Twig_Template
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
        echo "<section class=\"post\">

\t<div class=\"minor\">
\t\t<h1 class=\"post\">";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</h1>
\t\t<ul class=\"meta\">
\t\t\t<li> ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "detail");
        echo " <em>";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "non_link");
        echo "</em> <a href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link_text");
        echo "</a></li>
\t\t\t<li> ";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "detail2");
        echo " <em>";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "non_link2");
        echo "</em> <a href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link2");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link_text2");
        echo "</a></li>
\t\t\t<li> ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "detail3");
        echo " <em>";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "non_link3");
        echo "</em> <a href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link3");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link_text3");
        echo "</a></li> 
\t\t\t<li> ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "detail4");
        echo " <em>";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "non_link4");
        echo "</em> <a href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link4");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link_text4");
        echo "</a></li> 
\t\t\t
\t\t</ul>

\t</div>
\t<div class=\"major\">";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "</div>
</section>
<section class=\"";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name");
        echo "\">
<div class=\"page-project\">
\t";
        // line 23
        echo "\t";
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "html"))) {
            // line 24
            echo "\t\t
\t\t\t
\t\t\t";
            // line 27
            echo "\t\t\t";
            $this->env->loadTemplate("includes/assets/media.html")->display($context);
            // line 28
            echo "\t\t
\t";
        }
        // line 30
        echo "\t";
        // line 31
        echo "\t\t\t</div>


</section>
\t";
        // line 35
        $this->env->loadTemplate("includes/navigation/pagination-blog.html")->display($context);
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
