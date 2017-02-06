<?php

/* panel-colors.twig */
class __TwigTemplate_5304054cc4676aad41e4244125be4427290aa7d037354aab1ed877882f8cf807 extends Twig_Template
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
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $context["options"] = array(0 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "background", array()), "name" => "background", "schemes" => array(0 => "normal"), "default" => ""), 1 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "border", array()), "name" => "border", "schemes" => array(0 => "normal"), "default" => ""), 2 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "font_current", array()), "name" => "font_current", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 3 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "background_current", array()), "name" => "background_current", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 4 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "font_other", array()), "name" => "font_other", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 5 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "background_other", array()), "name" => "background_other", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""));
        // line 10
        echo "
";
        // line 11
        if (isset($context["css_class"])) { $_css_class_ = $context["css_class"]; } else { $_css_class_ = null; }
        $context["css_class"] = ((array_key_exists("css_class", $context)) ? (_twig_default_filter($_css_class_, "js-wpml-ls-colorpicker")) : ("js-wpml-ls-colorpicker"));
        // line 12
        echo "
<div class=\"js-wpml-ls-panel-colors wpml-ls-panel-colors\">
    <h4>";
        // line 14
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "panel_title", array()), "html", null, true);
        echo "</h4>

    <label for=\"wpml-ls-";
        // line 16
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "-colorpicker-preset\">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "label_color_preset", array()), "html", null, true);
        echo "</label>
    <select name=\"wpml-ls-";
        // line 17
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "-colorpicker-preset\" class=\"js-wpml-ls-colorpicker-preset\">
        <option value=\"\">-- ";
        // line 18
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "select_option_choose", array()), "html", null, true);
        echo " --</option>
        ";
        // line 19
        if (isset($context["color_schemes"])) { $_color_schemes_ = $context["color_schemes"]; } else { $_color_schemes_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_color_schemes_);
        foreach ($context['_seq'] as $context["scheme_id"] => $context["scheme"]) {
            // line 20
            echo "            <option value=\"";
            if (isset($context["scheme_id"])) { $_scheme_id_ = $context["scheme_id"]; } else { $_scheme_id_ = null; }
            echo twig_escape_filter($this->env, $_scheme_id_, "html", null, true);
            echo "\">";
            if (isset($context["scheme"])) { $_scheme_ = $context["scheme"]; } else { $_scheme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_scheme_, "label", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['scheme_id'], $context['scheme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </select>

    <div>
        <table>
            <tr>
                <td>
                </td>
                <th>";
        // line 29
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "label_normal_scheme", array()), "html", null, true);
        echo "</th>
                <th>";
        // line 30
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "label_hover_scheme", array()), "html", null, true);
        echo "</th>
            </tr>
            ";
        // line 32
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_options_);
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_option_, "label", array()), "html", null, true);
            echo "</td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 36
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (twig_in_filter("normal", $this->getAttribute($_option_, "schemes", array()))) {
                // line 37
                echo "                        ";
                if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                if ($_name_base_) {
                    // line 38
                    echo "                            ";
                    if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ((($_name_base_ . "[") . $this->getAttribute($_option_, "name", array())) . "_normal]");
                    // line 39
                    echo "                        ";
                } else {
                    // line 40
                    echo "                            ";
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ($this->getAttribute($_option_, "name", array()) . "_normal");
                    // line 41
                    echo "                        ";
                }
                // line 42
                echo "                        <input class=\"";
                if (isset($context["css_class"])) { $_css_class_ = $context["css_class"]; } else { $_css_class_ = null; }
                echo twig_escape_filter($this->env, $_css_class_, "html", null, true);
                echo " js-wpml-ls-color-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "_normal\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 43
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "-normal\" name=\"";
                if (isset($context["input_name"])) { $_input_name_ = $context["input_name"]; } else { $_input_name_ = null; }
                echo twig_escape_filter($this->env, $_input_name_, "html", null, true);
                echo "\"
                               value=\"";
                // line 44
                if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_normal"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_normal"), array(), "array"), $this->getAttribute($_option_, "default", array()))) : ($this->getAttribute($_option_, "default", array()))), "html", null, true);
                echo "\" data-default-color=\"";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "default", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 46
            echo "                </td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 48
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (twig_in_filter("hover", $this->getAttribute($_option_, "schemes", array()))) {
                // line 49
                echo "                        ";
                if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                if ($_name_base_) {
                    // line 50
                    echo "                            ";
                    if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ((($_name_base_ . "[") . $this->getAttribute($_option_, "name", array())) . "_hover]");
                    // line 51
                    echo "                        ";
                } else {
                    // line 52
                    echo "                            ";
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ($this->getAttribute($_option_, "name", array()) . "_hover");
                    // line 53
                    echo "                        ";
                }
                // line 54
                echo "                        <input class=\"";
                if (isset($context["css_class"])) { $_css_class_ = $context["css_class"]; } else { $_css_class_ = null; }
                echo twig_escape_filter($this->env, $_css_class_, "html", null, true);
                echo " js-wpml-ls-color-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "_hover\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 55
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "-hover\" name=\"";
                if (isset($context["input_name"])) { $_input_name_ = $context["input_name"]; } else { $_input_name_ = null; }
                echo twig_escape_filter($this->env, $_input_name_, "html", null, true);
                echo "\"
                               value=\"";
                // line 56
                if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_hover"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_hover"), array(), "array"), $this->getAttribute($_option_, "default", array()))) : ($this->getAttribute($_option_, "default", array()))), "html", null, true);
                echo "\" data-default-color=\"";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "default", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 58
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "panel-colors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 61,  216 => 58,  206 => 56,  195 => 55,  186 => 54,  183 => 53,  179 => 52,  176 => 51,  171 => 50,  167 => 49,  164 => 48,  160 => 46,  150 => 44,  139 => 43,  130 => 42,  127 => 41,  123 => 40,  120 => 39,  115 => 38,  111 => 37,  108 => 36,  102 => 34,  99 => 33,  94 => 32,  88 => 30,  83 => 29,  74 => 22,  61 => 20,  56 => 19,  51 => 18,  46 => 17,  38 => 16,  32 => 14,  28 => 12,  25 => 11,  22 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set options = [
        {'label': strings.color_picker.background,         'name': 'background',         'schemes': ['normal'],          'default': '' },
        {'label': strings.color_picker.border,             'name': 'border',             'schemes': ['normal'],          'default': '' },
        {'label': strings.color_picker.font_current,       'name': 'font_current',       'schemes': ['normal', 'hover'], 'default': '' },
        {'label': strings.color_picker.background_current, 'name': 'background_current', 'schemes': ['normal', 'hover'], 'default': '' },
        {'label': strings.color_picker.font_other,         'name': 'font_other',         'schemes': ['normal', 'hover'], 'default': '' },
        {'label': strings.color_picker.background_other,   'name': 'background_other',   'schemes': ['normal', 'hover'], 'default': '' },
    ]
%}

{% set css_class = css_class|default( 'js-wpml-ls-colorpicker' ) %}

<div class=\"js-wpml-ls-panel-colors wpml-ls-panel-colors\">
    <h4>{{ strings.color_picker.panel_title }}</h4>

    <label for=\"wpml-ls-{{ id }}-colorpicker-preset\">{{ strings.color_picker.label_color_preset }}</label>
    <select name=\"wpml-ls-{{ id }}-colorpicker-preset\" class=\"js-wpml-ls-colorpicker-preset\">
        <option value=\"\">-- {{ strings.color_picker.select_option_choose }} --</option>
        {% for scheme_id, scheme in color_schemes %}
            <option value=\"{{ scheme_id }}\">{{ scheme.label }}</option>
        {% endfor %}
    </select>

    <div>
        <table>
            <tr>
                <td>
                </td>
                <th>{{ strings.color_picker.label_normal_scheme }}</th>
                <th>{{ strings.color_picker.label_hover_scheme }}</th>
            </tr>
            {% for option in options %}
            <tr>
                <td>{{ option.label }}</td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    {% if 'normal' in option.schemes %}
                        {% if name_base %}
                            {% set input_name = name_base ~ '[' ~ option.name ~ '_normal]' %}
                        {% else %}
                            {% set input_name =  option.name ~ '_normal' %}
                        {% endif %}
                        <input class=\"{{ css_class }} js-wpml-ls-color-{{ option.name }}_normal\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-{{ id }}-{{ option.name }}-normal\" name=\"{{ input_name }}\"
                               value=\"{{ slot_settings[ option.name ~ \"_normal\" ]|default( option.default ) }}\" data-default-color=\"{{ option.default }}\" style=\"display: none;\">
                    {% endif %}
                </td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    {% if 'hover' in option.schemes %}
                        {% if name_base %}
                            {% set input_name = name_base ~ '[' ~ option.name ~ '_hover]' %}
                        {% else %}
                            {% set input_name =  option.name ~ '_hover' %}
                        {% endif %}
                        <input class=\"{{ css_class }} js-wpml-ls-color-{{ option.name }}_hover\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-{{ id }}-{{ option.name }}-hover\" name=\"{{ input_name }}\"
                               value=\"{{ slot_settings[ option.name ~ \"_hover\" ]|default( option.default ) }}\" data-default-color=\"{{ option.default }}\" style=\"display: none;\">
                    {% endif %}
                </td>
            </tr>
            {% endfor %}
        </table>
    </div>
</div>", "panel-colors.twig", "/home/besteel/www/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/panel-colors.twig");
    }
}
