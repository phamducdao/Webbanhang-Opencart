<?php

/* default/template/common/search.twig */
class __TwigTemplate_c8acacb90c9b7f7c5d0fdc702e3e31c383d86aff899c02221331cdf7069ee316 extends Twig_Template
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
        echo "<div class=\"search-area\" id=\"search\">
    <div class=\"control-group\">
        <input type=\"text\" name=\"search\" value=\"";
        // line 3
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"search-field\"/>
        ";
        // line 5
        echo "        <button type=\"button\" class=\"search-button\"></button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="search-area" id="search">*/
/*     <div class="control-group">*/
/*         <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="search-field"/>*/
/*         {#<a class="search-button" href="#"></a>#}*/
/*         <button type="button" class="search-button"></button>*/
/*     </div>*/
/* </div>*/
