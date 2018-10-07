<?php

/* index.html */
class __TwigTemplate_abe9c9159a1b76865e388f59266dca88 extends Twig_Template
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
        echo "\t<section class=\"intro\">
\t\t<h1 class=\"intro\"> Tim is a <em>digital product designer</em> based in London, UK</h1>
\t\t<em class=\"social\"><a href=\"mailto:mail@timdavey.com\">Email</a>  /  <a href=\"https://www.linkedin.com/in/tim-davey-394b43a8\">Linkedin</a>  /  <a href=\"http://twitter.com/tjdaveyuk\">Twitter</a>  /  <a href=\"http://blog.timdavey.com/\">Tumblr</a>  /  <a href=\"https://dribbble.com/TimDavey/\">Dribbble</a></em>

\t</section>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
