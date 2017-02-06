<?php

/* section-shortcode-action.twig */
class __TwigTemplate_703578084e7814678d5e6c3386213511445b7b4132f2ea9ca8fbf842d18c8e8b extends Twig_Template
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
        echo "<p>";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo $this->getAttribute($this->getAttribute($_strings_, "shortcode_actions", array()), "section_description", array());
        echo "</p>

<div class=\"hidden\">
    ";
        // line 4
        $context["slot_settings"] = array();
        // line 5
        echo "    ";
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["slot_settings"] = twig_array_merge($_slot_settings_, array("shortcode_actions" => $this->getAttribute($this->getAttribute($_settings_, "statics", array()), "footer", array())));
        // line 6
        echo "
    ";
        // line 7
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("table-slots.twig", "section-shortcode-action.twig", 7)->display(array_merge($context, array("slot_type" => "statics", "slots_settings" => $_slot_settings_, "slug" => "shortcode_actions")));
        // line 14
        echo "
</div>

<div class=\"alignleft\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">";
        // line 20
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "shortcode_actions", array()), "customize_button_label", array()), "html", null, true);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "section-shortcode-action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  40 => 14,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>{{ strings.shortcode_actions.section_description|raw }}</p>

<div class=\"hidden\">
    {% set slot_settings = [] %}
    {% set slot_settings = slot_settings|merge({'shortcode_actions': settings.statics.footer}) %}

    {% include 'table-slots.twig'
        with {
            \"slot_type\": \"statics\",
            \"slots_settings\": slot_settings,
            \"slug\"     : 'shortcode_actions',
        }
    %}

</div>

<div class=\"alignleft\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">{{ strings.shortcode_actions.customize_button_label }}</button>
</div>", "section-shortcode-action.twig", "/home/besteel/www/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-shortcode-action.twig");
    }
}
