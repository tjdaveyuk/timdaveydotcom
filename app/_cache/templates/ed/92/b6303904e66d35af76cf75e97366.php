<?php

/* post.html */
class __TwigTemplate_ed92b6303904e66d35af76cf75e97366 extends Twig_Template
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
";
        // line 7
        echo "
";
        // line 11
        echo "

<section class=\"hero\">

\t";
        // line 16
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image")) {
            // line 17
            echo "\t\t<figure class=\"media  hero\">
\t\t\t<img src=\"";
            // line 18
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image"), "time_string");
            echo "\">
\t\t</figure>
\t";
        }
        // line 21
        echo "</section>


<section class=\"";
        // line 24
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name");
        echo "\">
\t";
        // line 26
        echo "\t<div class=\"minor\">
\t\t<h1 class=\"post\">";
        // line 27
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</h1>
\t\t<p class=\"post-date\">";
        // line 28
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date");
        echo "</p>
\t</div>
\t<div class=\"major\">";
        // line 30
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "</div>
</section>
\t
\t<!-- post media -->
\t";
        // line 34
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "html"))) {
            // line 35
            echo "\t<div class=\"page-media-constrain\">
\t
\t<!--  include media -->
\t";
            // line 38
            $this->env->loadTemplate("includes/assets/media.html")->display($context);
            // line 39
            echo "
\t</div>
\t";
        }
        // line 42
        echo "\t
\t

";
        // line 46
        echo "
";
        // line 55
        echo "
";
        // line 56
        $this->env->loadTemplate("includes/navigation/pagination-blog.html")->display($context);
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
