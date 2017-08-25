<?php

/* themes/custom/templates/system/page.html.twig */
class __TwigTemplate_83c732b38ef69e55d8186ae960ea58bdb920a12517dee5824f4ec80bb1289ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 10);
        $filters = array("t" => 11);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 8
        echo "<div id=\"page-wrapper\">
    <div id=\"page\">
        ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 11
            echo "            <header id=\"header\" role=\"banner\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
            echo "\">
                <nav id=\"navigation\">
                    <div class=\"container\">
                            <div id=\"main-menu\">
                                ";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
                            </div>
                    </div>
                </nav>
            </header>
        ";
        }
        // line 21
        echo "        <div id=\"main-wrapper\">
            <div id=\"main\" class=\"clearfix\">

                ";
        // line 24
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 25
            echo "                    <div id=\"sidebar\">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                    <main id=\"content\" role=\"main\">
                        <section class=\"section\">
                            <a id=\"main-content\" tabindex=\"-1\"></a>
                            ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
                            ";
            // line 34
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 35
                echo "                                <h1 class=\"title\" id=\"page-title\">
                                    ";
                // line 36
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "
                                </h1>
                            ";
            }
            // line 39
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
                            ";
            // line 40
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 41
                echo "                                <ul class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</ul>
                            ";
            }
            // line 43
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                        </section>
                    </main>
                ";
        } else {
            // line 47
            echo "                    <main id=\"content\"  role=\"main\">
                        <section class=\"section\">
                            <a id=\"main-content\" tabindex=\"-1\"></a>
                            ";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
                            ";
            // line 51
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 52
                echo "                                <h1 class=\"title\" id=\"page-title\">
                                    ";
                // line 53
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "
                                </h1>
                            ";
            }
            // line 56
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
                            ";
            // line 57
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 58
                echo "                                <ul class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</ul>
                            ";
            }
            // line 60
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                        </section>
                    </main>
                ";
        }
        // line 64
        echo "            </div>
        </div>
        <div id=\"footer\">
            ";
        // line 67
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 68
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
            ";
        }
        // line 70
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 70,  170 => 68,  168 => 67,  163 => 64,  155 => 60,  149 => 58,  147 => 57,  142 => 56,  136 => 53,  133 => 52,  131 => 51,  127 => 50,  122 => 47,  114 => 43,  108 => 41,  106 => 40,  101 => 39,  95 => 36,  92 => 35,  90 => 34,  86 => 33,  77 => 27,  73 => 25,  71 => 24,  66 => 21,  57 => 15,  49 => 11,  47 => 10,  43 => 8,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Himalaya's theme implementation to display a single page.
 *
 */
#}
<div id=\"page-wrapper\">
    <div id=\"page\">
        {% if page.header %}
            <header id=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
                <nav id=\"navigation\">
                    <div class=\"container\">
                            <div id=\"main-menu\">
                                {{ page.header }}
                            </div>
                    </div>
                </nav>
            </header>
        {% endif %}
        <div id=\"main-wrapper\">
            <div id=\"main\" class=\"clearfix\">

                {% if page.sidebar_first %}
                    <div id=\"sidebar\">
                        <aside class=\"section\" role=\"complementary\">
                            {{ page.sidebar_first }}
                        </aside>
                    </div>
                    <main id=\"content\" role=\"main\">
                        <section class=\"section\">
                            <a id=\"main-content\" tabindex=\"-1\"></a>
                            {{ title_prefix }}
                            {% if title %}
                                <h1 class=\"title\" id=\"page-title\">
                                    {{ title }}
                                </h1>
                            {% endif %}
                            {{ title_suffix }}
                            {% if action_links %}
                                <ul class=\"action-links\">{{ action_links }}</ul>
                            {% endif %}
                            {{ page.content }}
                        </section>
                    </main>
                {% else %}
                    <main id=\"content\"  role=\"main\">
                        <section class=\"section\">
                            <a id=\"main-content\" tabindex=\"-1\"></a>
                            {{ title_prefix }}
                            {% if title %}
                                <h1 class=\"title\" id=\"page-title\">
                                    {{ title }}
                                </h1>
                            {% endif %}
                            {{ title_suffix }}
                            {% if action_links %}
                                <ul class=\"action-links\">{{ action_links }}</ul>
                            {% endif %}
                            {{ page.content }}
                        </section>
                    </main>
                {% endif %}
            </div>
        </div>
        <div id=\"footer\">
            {% if page.footer %}
                {{ page.footer }}
            {% endif %}
        </div>
    </div>
</div>

";
    }
}
