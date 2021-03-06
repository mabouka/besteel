<?php

/* slot-subform-menus.twig */
class __TwigTemplate_61c69d0c730920e812981dd8a77a84d3d522141b4a656a4d19ed03b6cd5b9f73 extends Twig_Template
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
        if ( !array_key_exists("slot_settings", $context)) {
            // line 2
            echo "\t";
            if (isset($context["default_menus_slot"])) { $_default_menus_slot_ = $context["default_menus_slot"]; } else { $_default_menus_slot_ = null; }
            $context["slot_settings"] = $_default_menus_slot_;
        }
        // line 4
        echo "
";
        // line 5
        if (isset($context["preview"])) { $_preview_ = $context["preview"]; } else { $_preview_ = null; }
        $this->loadTemplate("preview.twig", "slot-subform-menus.twig", 5)->display(array_merge($context, array("preview" => $_preview_)));
        // line 6
        echo "
<div class=\"wpml-ls-subform-options\">

    ";
        // line 9
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slots"])) { $_slots_ = $context["slots"]; } else { $_slots_ = null; }
        $this->loadTemplate("dropdown-menus.twig", "slot-subform-menus.twig", 9)->display(array_merge($context, array("slug" => $_slug_, "menus" => $_slots_)));
        // line 15
        echo "
    ";
        // line 16
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-menus.twig", 16)->display(array_merge($context, array("id" => ("in-menus-" . $_slug_), "name" => (("menus[" . $_slug_) . "][template]"), "value" => $this->getAttribute($_slot_settings_, "template", array()), "slot_type" => "menus")));
        // line 24
        echo "
    ";
        // line 25
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("radio-position-menu.twig", "slot-subform-menus.twig", 25)->display(array_merge($context, array("name_base" => (("menus[" . $_slug_) . "]"), "slot_settings" => $_slot_settings_)));
        // line 31
        echo "
    ";
        // line 32
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("radio-hierarchical-menu.twig", "slot-subform-menus.twig", 32)->display(array_merge($context, array("name_base" => (("menus[" . $_slug_) . "]"), "slot_settings" => $_slot_settings_)));
        // line 38
        echo "

    ";
        // line 40
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-menus.twig", 40)->display(array_merge($context, array("name_base" => (("menus[" . $_slug_) . "]"), "slot_settings" => $_slot_settings_, "template_slug" => $this->getAttribute($_slot_settings_, "template", array()))));
        // line 47
        echo "
    ";
        // line 48
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("panel-colors.twig", "slot-subform-menus.twig", 48)->display(array_merge($context, array("id" => ("in-menus-" . $_slug_), "name_base" => (("menus[" . $_slug_) . "]"), "slot_settings" => $_slot_settings_)));
        // line 55
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-menus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 55,  73 => 48,  70 => 47,  66 => 40,  62 => 38,  58 => 32,  55 => 31,  51 => 25,  48 => 24,  44 => 16,  41 => 15,  37 => 9,  32 => 6,  29 => 5,  26 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not slot_settings is defined %}
\t{% set slot_settings = default_menus_slot %}
{% endif %}

{% include 'preview.twig' with {\"preview\": preview } %}

<div class=\"wpml-ls-subform-options\">

    {% include 'dropdown-menus.twig'
        with {
            \"slug\":     slug,
            \"menus\":    slots,
        }
    %}

    {% include 'dropdown-templates.twig'
        with {
            \"id\": \"in-menus-\" ~ slug,
            \"name\": \"menus[\" ~ slug ~ \"][template]\",
            \"value\": slot_settings.template,
            \"slot_type\": \"menus\",
        }
    %}

    {% include 'radio-position-menu.twig'
        with {
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings
        }
    %}

    {% include 'radio-hierarchical-menu.twig'
        with {
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings
        }
    %}


    {% include 'checkboxes-includes.twig'
        with {
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
            \"template_slug\": slot_settings.template,
        }
    %}

    {% include 'panel-colors.twig'
        with {
            \"id\": \"in-menus-\" ~ slug,
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
        }
    %}

</div>", "slot-subform-menus.twig", "/home/besteel/www/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-menus.twig");
    }
}
