<?php

/* ::base.html.twig */
class __TwigTemplate_8799df01f998e1cdf50a559ffc42fe8492af26fc8733760d22f55338eb99309d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a89fcf6ed02043cd4dc6bce52cf3b3211d1cf90062c564ab3bf5187256ffd1 = $this->env->getExtension("native_profiler");
        $__internal_96a89fcf6ed02043cd4dc6bce52cf3b3211d1cf90062c564ab3bf5187256ffd1->enter($__internal_96a89fcf6ed02043cd4dc6bce52cf3b3211d1cf90062c564ab3bf5187256ffd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_96a89fcf6ed02043cd4dc6bce52cf3b3211d1cf90062c564ab3bf5187256ffd1->leave($__internal_96a89fcf6ed02043cd4dc6bce52cf3b3211d1cf90062c564ab3bf5187256ffd1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c149f224d60eed37251bf3d28c35bf0078e5f8f07b95af271be4f7396f8c5fa6 = $this->env->getExtension("native_profiler");
        $__internal_c149f224d60eed37251bf3d28c35bf0078e5f8f07b95af271be4f7396f8c5fa6->enter($__internal_c149f224d60eed37251bf3d28c35bf0078e5f8f07b95af271be4f7396f8c5fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c149f224d60eed37251bf3d28c35bf0078e5f8f07b95af271be4f7396f8c5fa6->leave($__internal_c149f224d60eed37251bf3d28c35bf0078e5f8f07b95af271be4f7396f8c5fa6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb59f51f2abd022344ea3fb28a1f8443aeb36a7a739f5e75f775814b3a66bcc0 = $this->env->getExtension("native_profiler");
        $__internal_cb59f51f2abd022344ea3fb28a1f8443aeb36a7a739f5e75f775814b3a66bcc0->enter($__internal_cb59f51f2abd022344ea3fb28a1f8443aeb36a7a739f5e75f775814b3a66bcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb59f51f2abd022344ea3fb28a1f8443aeb36a7a739f5e75f775814b3a66bcc0->leave($__internal_cb59f51f2abd022344ea3fb28a1f8443aeb36a7a739f5e75f775814b3a66bcc0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_14a84f6dd6b51cf6c5a9b0168dcbde5d8f334da551eb1d1209df8205f0b511d4 = $this->env->getExtension("native_profiler");
        $__internal_14a84f6dd6b51cf6c5a9b0168dcbde5d8f334da551eb1d1209df8205f0b511d4->enter($__internal_14a84f6dd6b51cf6c5a9b0168dcbde5d8f334da551eb1d1209df8205f0b511d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14a84f6dd6b51cf6c5a9b0168dcbde5d8f334da551eb1d1209df8205f0b511d4->leave($__internal_14a84f6dd6b51cf6c5a9b0168dcbde5d8f334da551eb1d1209df8205f0b511d4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cc29c4b12a6e3d55e406ed4e07c83be3c87b7c5b0d00bffd92f96408f6407a6 = $this->env->getExtension("native_profiler");
        $__internal_3cc29c4b12a6e3d55e406ed4e07c83be3c87b7c5b0d00bffd92f96408f6407a6->enter($__internal_3cc29c4b12a6e3d55e406ed4e07c83be3c87b7c5b0d00bffd92f96408f6407a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cc29c4b12a6e3d55e406ed4e07c83be3c87b7c5b0d00bffd92f96408f6407a6->leave($__internal_3cc29c4b12a6e3d55e406ed4e07c83be3c87b7c5b0d00bffd92f96408f6407a6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
