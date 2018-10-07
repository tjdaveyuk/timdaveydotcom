<?php

/* experience.html */
class __TwigTemplate_7d89c2c744e0de33ea7943fc0275c30b extends Twig_Template
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
        echo "<section class=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name");
        echo "\">

\t";
        // line 8
        echo "\t<div class=\"minor\">
\t\t<h1>";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</h1>
\t\t";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
\t\t<a href=\"mailto:mail@timdavey.com\">Get in contact</a>
\t</div>
\t<div class=\"major\">
\t\t<div class=\"entry\">
\t\t<p class=\"date\">2015 ~ 2016</p>
\t\t<p class=\"firm\">Student.com</p>
\t\t<p class=\"position\">Lead Product Designer</p>
\t\t</div>
\t\t<div class=\"entry\">
\t\t<p class=\"date\">2014 ~ 2015</p>
\t\t<p class=\"firm\">Boticca.com</p>
\t\t<p class=\"position\">Lead UI Designer</p>
\t\t</div>
\t\t<div class=\"entry\">
\t\t<p class=\"date\">2011 ~ 2014</p>
\t\t<p class=\"firm\">RetailMeNot, .Inc</p>
\t\t<p class=\"position\">Product Designer</p>
\t\t</div>
\t\t<div class=\"entry\">
\t\t<p class=\"date\">2010 ~ 2011</p>
\t\t<p class=\"firm\">Weedoo Media</p>
\t\t<p class=\"position\">Digital Designer</p>
\t\t</div>
\t\t<div class=\"entry\">
\t\t<p class=\"date\">2007 ~ 2010</p>
\t\t<p class=\"firm\">University of Brighton</p>
\t\t<p class=\"position\">Ba ( Hons ) Illustration</p>
\t\t</div>
\t</div>

</section>
";
    }

    public function getTemplateName()
    {
        return "experience.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
