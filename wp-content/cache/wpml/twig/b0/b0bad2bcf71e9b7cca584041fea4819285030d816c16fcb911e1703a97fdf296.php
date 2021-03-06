<?php

/* radio-position-menu.twig */
class __TwigTemplate_58b6f592b54eed98e80f5ab0be507530c10c8a78a2186f2176b31ef7cdc1a1b6 extends Twig_Template
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
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if ( !$this->getAttribute($_slot_settings_, "position_in_menu", array())) {
            // line 2
            echo "    ";
            $context["menu_position"] = "after";
        } else {
            // line 4
            echo "    ";
            if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
            $context["menu_position"] = $this->getAttribute($_slot_settings_, "position_in_menu", array());
        }
        // line 6
        echo "
<h4><label>";
        // line 7
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "position_label", array()), "html", null, true);
        echo "</label>  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "radio-position-menu.twig", 7)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "menu_position", array()))));
        echo "</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" name=\"";
        // line 11
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[position_in_menu]";
        } else {
            echo "position_in_menu";
        }
        echo "\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"before\"";
        // line 13
        if (isset($context["menu_position"])) { $_menu_position_ = $context["menu_position"]; } else { $_menu_position_ = null; }
        if (($_menu_position_ == "before")) {
            echo " checked=\"checked\"";
        }
        echo ">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "position_first_item", array()), "html", null, true);
        echo "
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" name=\"";
        // line 18
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[position_in_menu]";
        } else {
            echo "position_in_menu";
        }
        echo "\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"after\"";
        // line 20
        if (isset($context["menu_position"])) { $_menu_position_ = $context["menu_position"]; } else { $_menu_position_ = null; }
        if (($_menu_position_ == "after")) {
            echo " checked=\"checked\"";
        }
        echo ">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "position_last_item", array()), "html", null, true);
        echo "
        </label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "radio-position-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  71 => 18,  57 => 13,  45 => 11,  34 => 7,  31 => 6,  26 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not slot_settings.position_in_menu %}
    {% set menu_position = 'after' %}
{% else %}
    {% set menu_position = slot_settings.position_in_menu %}
{% endif %}

<h4><label>{{ strings.menus.position_label }}</label>  {% include 'tooltip.twig' with { \"content\": strings.tooltips.menu_position } %}</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" name=\"{% if name_base %}{{ name_base }}[position_in_menu]{% else %}position_in_menu{% endif %}\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"before\"{% if menu_position == 'before' %} checked=\"checked\"{% endif %}>{{ strings.menus.position_first_item }}
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" name=\"{% if name_base %}{{ name_base }}[position_in_menu]{% else %}position_in_menu{% endif %}\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"after\"{% if menu_position == 'after' %} checked=\"checked\"{% endif %}>{{ strings.menus.position_last_item }}
        </label>
    </li>
</ul>", "radio-position-menu.twig", "/home/besteel/www/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/radio-position-menu.twig");
    }
}
