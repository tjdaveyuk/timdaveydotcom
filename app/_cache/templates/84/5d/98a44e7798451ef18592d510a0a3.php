<?php

/* default.html */
class __TwigTemplate_845d98a44e7798451ef18592d510a0a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->



";
        // line 12
        echo "<head>
<meta charset=\"utf-8\">



";
        // line 18
        echo "<link rel=\"dns-prefetch\" href=\"//www.google-analytics.com\">



";
        // line 23
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/style.css\">



";
        // line 28
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
<title>";
        // line 29
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
            echo " - ";
        }
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</title>
<meta name=\"description\" content=\"";
        // line 30
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_description");
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 31
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "default_keywords");
        echo ", ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug");
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo ", ";
            echo (isset($context["tag"]) ? $context["tag"] : null);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\">
<meta name=\"author\" content=\"";
        // line 32
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "\">



";
        // line 37
        $this->env->loadTemplate("includes/modules/meta-social.html")->display($context);
        // line 38
        echo "
</head>



";
        // line 44
        $this->displayBlock('navigation', $context, $blocks);
        // line 47
        echo "


";
        // line 51
        echo "<body class=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name");
        echo "\">

  ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
</body>



";
        // line 62
        echo "<script src=\"/public/js/libs/jquery-1.10.2.min.js\"></script>
<script src=\"/public/js/libs/modernizr.min.js\"></script>
<script src=\"/public/js/libs/scripts.js\"></script>


</html>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_navigation($context, array $blocks = array())
    {
        // line 45
        $this->env->loadTemplate("includes/modules/header.html")->display($context);
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
