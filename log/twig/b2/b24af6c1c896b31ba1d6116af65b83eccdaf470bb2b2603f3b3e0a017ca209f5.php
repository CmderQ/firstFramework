<?php

/* add.html */
class __TwigTemplate_6b938e88490dab971ddba6c5dd4e35fcbec309cd55ef5b7b168a7a40cc726d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form action=\"/index/save\" method=\"post\">
    <fieldset>
        <legend>添加留言</legend>
        <div>
            <input type=\"text\" name=\"title\" placeholder=\"请输入title\">
        </div>
        <br>
        <div>
            <textarea name=\"content\" placeholder=\"请输入content\" rows=\"5\" cols=\"22\"></textarea>
        </div>
        <p><button type=\"submit\">提交</button></p>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"common.html\" %}
{% block content %}
<form action=\"/index/save\" method=\"post\">
    <fieldset>
        <legend>添加留言</legend>
        <div>
            <input type=\"text\" name=\"title\" placeholder=\"请输入title\">
        </div>
        <br>
        <div>
            <textarea name=\"content\" placeholder=\"请输入content\" rows=\"5\" cols=\"22\"></textarea>
        </div>
        <p><button type=\"submit\">提交</button></p>
    </fieldset>
</form>
{% endblock%}", "add.html", "C:\\www\\framework\\app\\views\\add.html");
    }
}
