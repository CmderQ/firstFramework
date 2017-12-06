<?php

/* hello.html */
class __TwigTemplate_5102c4180c1d953d1a7ab30caa4118a80d93cda64613b8df69131a055c193f60 extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "hello.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ data }}</h1>", "hello.html", "C:\\www\\framework\\app\\views\\hello.html");
    }
}
