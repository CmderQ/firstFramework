<?php

/* common.html */
class __TwigTemplate_e89103a2cfdb92f58208672c6225066136fca6150dce7893cd03d7ea4fbab61b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>
<header class=\"text-center\">
    <h1>超级简单留言板</h1>
    <a href=\"/index/index\">所有留言</a>
    <a href=\"/index/add\">添加留言</a>
</header>
<content>
";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "</content>
<footer>@2017 简单留言板</footer>
</body>
</html>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "common.html";
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 12,  30 => 9,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>
<header class=\"text-center\">
    <h1>超级简单留言板</h1>
    <a href=\"/index/index\">所有留言</a>
    <a href=\"/index/add\">添加留言</a>
</header>
<content>
{% block content %}

{% endblock %}
</content>
<footer>@2017 简单留言板</footer>
</body>
</html>", "common.html", "C:\\www\\framework\\app\\views\\common.html");
    }
}
