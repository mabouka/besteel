<?php

/* dropdown-menus.twig */
class __TwigTemplate_edea1e2024734d79e2e22d17f49398f55a2c6140fd73e5656c472878523b78f2 extends Twig_Template
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
        // line 1
        echo "<h4><label for=\"wpml-ls-available-menus\">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "select_label", array()), "html", null, true);
        echo ":</label>  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "dropdown-menus.twig", 1)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "available_menus", array()))));
        echo "</h4>
<select name=\"wpml_ls_available_menus\" class=\"js-wpml-ls-available-slots js-wpml-ls-available-menus\">
    <option disabled=\"disabled\">-- ";
        // line 3
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "select_option_choose", array()), "html", null, true);
        echo " --</option>
    ";
        // line 4
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_menus_);
        foreach ($context['_seq'] as $context["menu_key"] => $context["menu"]) {
            // line 5
            echo "        ";
            if (isset($context["menu_key"])) { $_menu_key_ = $context["menu_key"]; } else { $_menu_key_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($_menu_key_ == $_slug_)) {
                // line 6
                echo "            ";
                $context["attr"] = " selected=\"selected\"";
                // line 7
                echo "        ";
            } elseif (twig_in_filter($this->getAttribute($_menu_, "slug", array()), twig_get_array_keys_filter($this->getAttribute($_settings_, "menus", array())))) {
                // line 8
                echo "            ";
                $context["attr"] = " disabled=\"disabled\"";
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            ";
                $context["attr"] = "";
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <option value=\"";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "slug", array()), "html", null, true);
            echo "\"";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            echo twig_escape_filter($this->env, $_attr_, "html", null, true);
            echo ">";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "name", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['menu_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "dropdown-menus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  39 => 5,  34 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4><label for=\"wpml-ls-available-menus\">{{ strings.menus.select_label }}:</label>  {% include 'tooltip.twig' with { \"content\": strings.tooltips.available_menus } %}</h4>
<select name=\"wpml_ls_available_menus\" class=\"js-wpml-ls-available-slots js-wpml-ls-available-menus\">
    <option disabled=\"disabled\">-- {{ strings.menus.select_option_choose }} --</option>
    {% for menu_key, menu in menus %}
        {% if menu_key == slug %}
            {% set attr = ' selected=\"selected\"' %}
        {% elseif menu.slug in settings.menus|keys %}
            {% set attr = ' disabled=\"disabled\"' %}
        {% else %}
            {% set attr = '' %}
        {% endif %}
        <option value=\"{{ menu.slug }}\"{{ attr }}>{{ menu.name }}</option>
    {% endfor %}
</select>
", "dropdown-menus.twig", "/home/besteel/www/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/dropdown-menus.twig");
    }
}
