<?php

/* project_master/show.html.twig */
class __TwigTemplate_b1fb55ecfaa1152e4f5ea6151704226e05ef21383b8bcd89d521fc74e0b60fb5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project_master/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project_master/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project_master/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ProjectMaster";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ProjectMaster</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ProjectName</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 16, $this->source); })()), "ProjectName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>StartingDate</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 20, $this->source); })()), "StartingDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 20, $this->source); })()), "StartingDate", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CompletionDate</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 24, $this->source); })()), "CompletionDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 24, $this->source); })()), "CompletionDate", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remarks</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 28, $this->source); })()), "Remarks", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_master_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_master_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["project_master"]) || array_key_exists("project_master", $context) ? $context["project_master"] : (function () { throw new Twig_Error_Runtime('Variable "project_master" does not exist.', 35, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "project_master/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project_master/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  121 => 35,  116 => 33,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}ProjectMaster{% endblock %}

{% block body %}
    <h1>ProjectMaster</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ project_master.id }}</td>
            </tr>
            <tr>
                <th>ProjectName</th>
                <td>{{ project_master.ProjectName }}</td>
            </tr>
            <tr>
                <th>StartingDate</th>
                <td>{{ project_master.StartingDate ? project_master.StartingDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>CompletionDate</th>
                <td>{{ project_master.CompletionDate ? project_master.CompletionDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Remarks</th>
                <td>{{ project_master.Remarks }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('project_master_index') }}\">back to list</a>

    <a href=\"{{ path('project_master_edit', {'id': project_master.id}) }}\">edit</a>

    {{ include('project_master/_delete_form.html.twig') }}
{% endblock %}
", "project_master/show.html.twig", "/var/www/html/my-project/templates/project_master/show.html.twig");
    }
}
