<?php

/* themes/custom/templates/components/menu.html.twig */
class __TwigTemplate_1f4545b5151658e4327d89f76c431fe5b8119f69d69363b486d01fd70d3ca6f1 extends Twig_Template
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
        $tags = array("import" => 23, "macro" => 31, "set" => 35, "if" => 40, "for" => 46);
        $filters = array();
        $functions = array("link" => 48);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'set', 'if', 'for'),
                array(),
                array('link')
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

        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "    ";
            $context["menus"] = $this;
            // line 33
            echo "
    ";
            // line 35
            $context["menu_classes"] = array(0 => "content-width", 1 => "expands");
            // line 40
            echo "    ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 41
                echo "        ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 42
                    echo "            <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "removeClass", array(0 => "expands"), "method"), "html", null, true));
                    echo ">
        ";
                } else {
                    // line 44
                    echo "            <ul>
        ";
                }
                // line 46
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "            <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "removeClass", array(0 => "content-width"), "method"), "html", null, true));
                    echo ">
                ";
                    // line 48
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
                ";
                    // line 49
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 50
                        echo "                    ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
                ";
                    }
                    // line 52
                    echo "            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "        </ul>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/templates/components/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  115 => 52,  109 => 50,  107 => 49,  103 => 48,  98 => 47,  93 => 46,  89 => 44,  83 => 42,  80 => 41,  77 => 40,  75 => 35,  72 => 33,  69 => 32,  55 => 31,  48 => 29,  45 => 24,  43 => 23,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
    {% import _self as menus %}

    {%
    set menu_classes = [
    'content-width',
    'expands',
    ]
    %}
    {% if items %}
        {% if menu_level == 0 %}
            <ul{{ attributes.addClass(menu_classes).removeClass('expands') }}>
        {% else %}
            <ul>
        {% endif %}
        {% for item in items %}
            <li{{ attributes.addClass(menu_classes).removeClass('content-width') }}>
                {{ link(item.title, item.url) }}
                {% if item.below %}
                    {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                {% endif %}
            </li>
        {% endfor %}
        </ul>
    {% endif %}
{% endmacro %}";
    }
}
