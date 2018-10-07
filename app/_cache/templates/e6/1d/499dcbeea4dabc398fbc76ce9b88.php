<?php

/* includes/modules/meta-social.html */
class __TwigTemplate_e61d499dcbeea4dabc398fbc76ce9b88 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image")) {
            // line 5
            echo "\t";
            ob_start();
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image"), "absolute_url");
            $context["og_image"] = new Twig_Markup(ob_get_clean());
        } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_image")) {
            // line 7
            echo "\t";
            ob_start();
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_image"), "absolute_url");
            $context["og_image"] = new Twig_Markup(ob_get_clean());
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images") && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "reverse"))) {
            // line 9
            echo "\t";
            ob_start();
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Stacey')->slice(twig_reverse_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images")), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "absolute_url");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            $context["og_image"] = new Twig_Markup(ob_get_clean());
        } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images")) {
            // line 11
            echo "\t";
            ob_start();
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Stacey')->slice($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images"), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "absolute_url");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            $context["og_image"] = new Twig_Markup(ob_get_clean());
        } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb")) {
            // line 13
            echo "\t";
            $context["og_image"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "absolute_url");
        } else {
            // line 15
            echo "\t";
            $context["og_image"] = false;
        }
        // line 17
        echo "
";
        // line 19
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name") == "post") || ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name") == "rizon-update"))) {
            // line 20
            echo "\t";
            $context["og_type"] = "article";
        } else {
            // line 22
            echo "\t";
            $context["og_type"] = "website";
        }
        // line 24
        echo "
";
        // line 26
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name") != "home")) {
            // line 27
            echo "\t";
            ob_start();
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink");
            $context["og_url"] = new Twig_Markup(ob_get_clean());
        }
        // line 29
        echo "
";
        // line 31
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_image")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_image"))) {
            // line 32
            echo "\t";
            $context["twitter_card"] = "photo";
        } else {
            // line 34
            echo "\t";
            $context["twitter_card"] = "summary";
        }
        // line 36
        echo "

";
        // line 40
        if ((isset($context["og_image"]) ? $context["og_image"] : null)) {
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["og_image"]) ? $context["og_image"] : null);
            echo "\" />";
        }
        // line 41
        echo "<meta property=\"og:title\" content=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 42
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_description");
        echo "\" />
<meta property=\"og:type\" content=\"";
        // line 43
        echo (isset($context["og_type"]) ? $context["og_type"] : null);
        echo "\" />
<meta property=\"og:url\" content=\"http://";
        // line 44
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        echo "/";
        echo (isset($context["og_url"]) ? $context["og_url"] : null);
        echo "\" />
<meta name=\"twitter:card\" content=\"";
        // line 45
        echo (isset($context["twitter_card"]) ? $context["twitter_card"] : null);
        echo "\"/>
";
        // line 46
        if ((isset($context["og_image"]) ? $context["og_image"] : null)) {
            echo "<meta name=\"twitter:image\" content=\"";
            echo (isset($context["og_image"]) ? $context["og_image"] : null);
            echo "\"/>";
        }
    }

    public function getTemplateName()
    {
        return "includes/modules/meta-social.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
