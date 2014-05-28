<?php

/* 404.twig */
class __TwigTemplate_ec1d1d6344b310ede7dd9128e7253dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-fullwidth.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-fullwidth.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
    <div id=\"main\">
        <div class=\"not-found\">
            <h1>404</h1>

            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "The page cannot be found", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>
            <hr>

            <div class=\"row\">
                <div class=\"search-404 span4 offset4\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_search_form", array(), "method"), "html", null, true);
        echo "
                </div><!-- /.search-404 -->
            </div><!-- /.offset4 -->

            <p>
                Please use search box or <a href=\"javascript: window.history.go(-1)\">return back</a>
            </p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  38 => 9,  31 => 4,  28 => 3,);
    }
}
