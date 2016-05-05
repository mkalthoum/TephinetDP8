<?php

/* themes/space/templates/page.html.twig */
class __TwigTemplate_f8826ea034a0b10abd0a6f0c56779e6c51633caa0b09554399f8b2d8a6b92b32 extends Twig_Template
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
        $tags = array("if" => 67, "set" => 141);
        $filters = array("t" => 88);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 67
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 68
            echo "  <div id=\"header-top\" class=\"section\">
    ";
            // line 69
            if ((isset($context["header_media_video"]) ? $context["header_media_video"] : null)) {
                // line 70
                echo "      <video id=\"header-video\" class=\"ng-scope\" poster=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_video_still"]) ? $context["header_video_still"] : null), "html", null, true));
                echo "\" autoplay loop>
        <source src=\"";
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_media_url"]) ? $context["header_media_url"] : null), "html", null, true));
                echo "\" type=\"video/mp4\">
        Your browser does not support the video tag.
      </video>
    ";
            } else {
                // line 75
                echo "      <div id=\"header-image\" style=\"background: #fff url('";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_media_url"]) ? $context["header_media_url"] : null), "html", null, true));
                echo "') no-repeat fixed center bottom / cover \"></div>
    ";
            }
            // line 77
            echo "
    ";
            // line 78
            if ((isset($context["screen"]) ? $context["screen"] : null)) {
                // line 79
                echo "      <div id=\"header-screen\"></div>
    ";
            }
            // line 81
            echo "    ";
            if ((isset($context["fade"]) ? $context["fade"] : null)) {
                // line 82
                echo "      <div id=\"header-bg\"></div>
    ";
            }
            // line 84
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "html", null, true));
            echo "

    <div class=\"section layout-container clearfix\">
      ";
            // line 87
            if ((isset($context["logo"]) ? $context["logo"] : null)) {
                // line 88
                echo "        <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\" id=\"logo\">
          <img src=\"";
                // line 89
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" />
        </a>
      ";
            }
            // line 92
            echo "    </div>
    <div class=\"nav-down\"></div>
  </div>

 
";
        }
        // line 98
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
    ";
        // line 101
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 102
            echo "      <div id=\"main-menu\">
        <!-- Show the site logo -->
        <img alt=\"";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["Tephinet_logo"]) ? $context["Tephinet_logo"] : null), "html", null, true));
            echo "\">
        ";
            // line 105
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
      </div>
      <div class=\"menu-hamburger icon-menu\">
      </div>
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 112
            echo "      <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
            echo "\">
        ";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      </header>
    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 118
            echo "      <div class=\"featured\" class=\"section\">
        <aside class=\"featured__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 120
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 124
        echo "
    ";
        // line 125
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_top", array())) {
            // line 126
            echo "      <div class=\"page-top\">
        <aside class=\"page-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_top", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 132
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\" style=\"background: ";
        // line 133
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_image_url"]) ? $context["region_content_image_url"] : null), "html", null, true));
        echo "\">
      ";
        // line 134
        if ((isset($context["region_content_screen"]) ? $context["region_content_screen"] : null)) {
            // line 135
            echo "        <div class=\"screen\"></div>
      ";
        }
        // line 137
        echo "      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 138
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

        ";
        // line 140
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()))) {
            // line 141
            echo "          ";
            $context["content_class"] = "content-both";
            // line 142
            echo "        ";
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()))) {
            // line 143
            echo "          ";
            $context["content_class"] = "content-left";
            // line 144
            echo "        ";
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()))) {
            // line 145
            echo "          ";
            $context["content_class"] = "content-right";
            // line 146
            echo "        ";
        } elseif (( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()))) {
            // line 147
            echo "          ";
            $context["content_class"] = "content-full";
            // line 148
            echo "        ";
        }
        // line 149
        echo "
        <main id=\"content\" class=\"column main-content ";
        // line 150
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_class"]) ? $context["content_class"] : null), "html", null, true));
        echo "\" role=\"main\">
          ";
        // line 151
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 152
            echo "            <div class=\"content-top\">
              <aside class=\"content-top__inner section layout-container clearfix\" role=\"complementary\">
                ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
              </aside>
            </div>
          ";
        }
        // line 158
        echo "
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 161
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
            ";
        // line 162
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 163
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 164
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
              </h1>
            ";
        }
        // line 167
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
            ";
        // line 168
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 169
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
                ";
            // line 170
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
              </nav>
            ";
        }
        // line 173
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
        // line 174
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 175
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 177
        echo "
            ";
        // line 178
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>

          ";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 182
            echo "            <div class=\"content-bottom\">
              <aside class=\"content-bottom__inner section layout-container clearfix\" role=\"complementary\">
                ";
            // line 184
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
              </aside>
            </div>
          ";
        }
        // line 188
        echo "
        </main>
        ";
        // line 190
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
            // line 191
            echo "          <div id=\"sidebar-left\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 193
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 197
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
            // line 198
            echo "          <div id=\"sidebar-right\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 200
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 204
        echo "      </div>
    </div>

    <div class=\"separator-footer\"></div>

    ";
        // line 209
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_2", array())) {
            // line 210
            echo "      <div class=\"content_2_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_2_image_url"]) ? $context["region_content_2_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 211
            if ((isset($context["region_content_2_screen"]) ? $context["region_content_2_screen"] : null)) {
                // line 212
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 214
            echo "        <div class=\"content_2\">
          <aside class=\"content_2__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 216
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_2", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 221
        echo "
    ";
        // line 222
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_3", array())) {
            // line 223
            echo "      <div class=\"content_3_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_3_image_url"]) ? $context["region_content_3_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 224
            if ((isset($context["region_content_3_screen"]) ? $context["region_content_3_screen"] : null)) {
                // line 225
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 227
            echo "        <div class=\"content_3\">
          <aside class=\"content_3__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 229
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_3", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 234
        echo "
    ";
        // line 235
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_4", array())) {
            // line 236
            echo "      <div class=\"content_4_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_4_image_url"]) ? $context["region_content_4_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 237
            if ((isset($context["region_content_4_screen"]) ? $context["region_content_4_screen"] : null)) {
                // line 238
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 240
            echo "        <div class=\"content_4\">
          <aside class=\"content_4__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 242
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_4", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 247
        echo "
    ";
        // line 248
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_5", array())) {
            // line 249
            echo "      <div class=\"content_5_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_5_image_url"]) ? $context["region_content_5_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 250
            if ((isset($context["region_content_5_screen"]) ? $context["region_content_5_screen"] : null)) {
                // line 251
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 253
            echo "        <div class=\"content_5\">
          <aside class=\"content_5__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 255
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_5", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 260
        echo "
    ";
        // line 261
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array())) {
            // line 262
            echo "      <div class=\"page-bottom\">
        <aside class=\"page-bottom__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 264
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 268
        echo "
    <footer class=\"site-footer\">
      ";
        // line 270
        if ((isset($context["social_icons"]) ? $context["social_icons"] : null)) {
            // line 271
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["social_icons"]) ? $context["social_icons"] : null), "html", null, true));
            echo "
      ";
        }
        // line 273
        echo "      ";
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()))) {
            // line 274
            echo "        <div class=\"site-footer__top layout-container clearfix\">
          ";
            // line 275
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()), "html", null, true));
            echo "
          ";
            // line 276
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
            echo "
          ";
            // line 277
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 280
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 281
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
      ";
        }
        // line 283
        echo "    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/space/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 283,  527 => 281,  524 => 280,  518 => 277,  514 => 276,  510 => 275,  507 => 274,  504 => 273,  498 => 271,  496 => 270,  492 => 268,  485 => 264,  481 => 262,  479 => 261,  476 => 260,  468 => 255,  464 => 253,  460 => 251,  458 => 250,  453 => 249,  451 => 248,  448 => 247,  440 => 242,  436 => 240,  432 => 238,  430 => 237,  425 => 236,  423 => 235,  420 => 234,  412 => 229,  408 => 227,  404 => 225,  402 => 224,  397 => 223,  395 => 222,  392 => 221,  384 => 216,  380 => 214,  376 => 212,  374 => 211,  369 => 210,  367 => 209,  360 => 204,  353 => 200,  349 => 198,  346 => 197,  339 => 193,  335 => 191,  333 => 190,  329 => 188,  322 => 184,  318 => 182,  316 => 181,  310 => 178,  307 => 177,  301 => 175,  299 => 174,  294 => 173,  288 => 170,  283 => 169,  281 => 168,  276 => 167,  270 => 164,  267 => 163,  265 => 162,  261 => 161,  256 => 158,  249 => 154,  245 => 152,  243 => 151,  239 => 150,  236 => 149,  233 => 148,  230 => 147,  227 => 146,  224 => 145,  221 => 144,  218 => 143,  215 => 142,  212 => 141,  210 => 140,  205 => 138,  202 => 137,  198 => 135,  196 => 134,  192 => 133,  189 => 132,  182 => 128,  178 => 126,  176 => 125,  173 => 124,  166 => 120,  162 => 118,  160 => 117,  157 => 116,  151 => 113,  146 => 112,  144 => 111,  141 => 110,  133 => 105,  127 => 104,  123 => 102,  121 => 101,  116 => 98,  108 => 92,  100 => 89,  93 => 88,  91 => 87,  84 => 84,  80 => 82,  77 => 81,  73 => 79,  71 => 78,  68 => 77,  62 => 75,  55 => 71,  50 => 70,  48 => 69,  45 => 68,  43 => 67,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Space's theme implementation to display a single page.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header_top: Items for the header top region.*/
/*  * - page.header: Items for the header region.*/
/*  * - page.main_menu: The main menu of the site.*/
/*  * - messages: Site message display region.*/
/*  * - page_top: Items for the top of the page.*/
/*  * - content_top: Items that display above the content region.*/
/*  * - content: Items for the content region.*/
/*  * - content_bottom: Items that will show under the content region.*/
/*  * - left_sidebar: Items for the left sidebar region.*/
/*  * - right_sidebar: Items for the right sidebar region.*/
/*  * - page_bottom: Items for the page bottom region.*/
/*  * - footer_left: Items for the footer left region.*/
/*  * - footer_middle: Items for the footer middle region.*/
/*  * - footer_right: Items for the footer right region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see space_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% if is_front %}*/
/*   <div id="header-top" class="section">*/
/*     {% if header_media_video %}*/
/*       <video id="header-video" class="ng-scope" poster="{{ header_video_still }}" autoplay loop>*/
/*         <source src="{{ header_media_url }}" type="video/mp4">*/
/*         Your browser does not support the video tag.*/
/*       </video>*/
/*     {% else %}*/
/*       <div id="header-image" style="background: #fff url('{{ header_media_url }}') no-repeat fixed center bottom / cover "></div>*/
/*     {% endif %}*/
/* */
/*     {% if screen %}*/
/*       <div id="header-screen"></div>*/
/*     {% endif %}*/
/*     {% if fade %}*/
/*       <div id="header-bg"></div>*/
/*     {% endif %}*/
/*     {{ page.header_top }}*/
/* */
/*     <div class="section layout-container clearfix">*/
/*       {% if logo %}*/
/*         <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*           <img src="{{ logo }}" alt="{{ 'Home'|t }}" />*/
/*         </a>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="nav-down"></div>*/
/*   </div>*/
/* */
/*  */
/* {% endif %}*/
/* */
/* <div id="page-wrapper">*/
/*   <div id="page">*/
/*     {% if page.main_menu %}*/
/*       <div id="main-menu">*/
/*         <!-- Show the site logo -->*/
/*         <img alt="{{ 'Home'|t }}" src="{{ Tephinet_logo }}">*/
/*         {{ page.main_menu }}*/
/*       </div>*/
/*       <div class="menu-hamburger icon-menu">*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.header %}*/
/*       <header id="header" class="header" role="banner" aria-label="{{ 'Site header'|t}}">*/
/*         {{ page.header }}*/
/*       </header>*/
/*     {% endif %}*/
/* */
/*     {% if page.featured %}*/
/*       <div class="featured" class="section">*/
/*         <aside class="featured__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.featured }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.page_top %}*/
/*       <div class="page-top">*/
/*         <aside class="page-top__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.page_top }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix" style="background: {{ region_content_image_url }}">*/
/*       {% if region_content_screen %}*/
/*         <div class="screen"></div>*/
/*       {% endif %}*/
/*       <div id="main" class="layout-main clearfix">*/
/*         {{ page.breadcrumb }}*/
/* */
/*         {% if page.sidebar_left and page.sidebar_right %}*/
/*           {% set content_class = 'content-both' %}*/
/*         {% elseif page.sidebar_left and not page.sidebar_right %}*/
/*           {% set content_class = 'content-left' %}*/
/*         {% elseif page.sidebar_right and not page.sidebar_left %}*/
/*           {% set content_class = 'content-right' %}*/
/*         {% elseif not page.sidebar_left and not page.sidebar_right %}*/
/*           {% set content_class = 'content-full' %}*/
/*         {% endif %}*/
/* */
/*         <main id="content" class="column main-content {{ content_class }}" role="main">*/
/*           {% if page.content_top %}*/
/*             <div class="content-top">*/
/*               <aside class="content-top__inner section layout-container clearfix" role="complementary">*/
/*                 {{ page.content_top }}*/
/*               </aside>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           <section class="section">*/
/*             <a id="main-content" tabindex="-1"></a>*/
/*             {{ title_prefix }}*/
/*             {% if title %}*/
/*               <h1 class="title" id="page-title">*/
/*                 {{ title }}*/
/*               </h1>*/
/*             {% endif %}*/
/*             {{ title_suffix }}*/
/*             {% if tabs %}*/
/*               <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*                 {{ tabs }}*/
/*               </nav>*/
/*             {% endif %}*/
/*             {{ page.help }}*/
/*             {% if action_links %}*/
/*               <ul class="action-links">{{ action_links }}</ul>*/
/*             {% endif %}*/
/* */
/*             {{ page.content }}*/
/*           </section>*/
/* */
/*           {% if page.content_bottom %}*/
/*             <div class="content-bottom">*/
/*               <aside class="content-bottom__inner section layout-container clearfix" role="complementary">*/
/*                 {{ page.content_bottom }}*/
/*               </aside>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*         </main>*/
/*         {% if page.sidebar_left %}*/
/*           <div id="sidebar-left" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_left }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.sidebar_right %}*/
/*           <div id="sidebar-right" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_right }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="separator-footer"></div>*/
/* */
/*     {% if page.content_2 %}*/
/*       <div class="content_2_wrapper" style="background: {{ region_content_2_image_url }}">*/
/*         {% if region_content_2_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_2">*/
/*           <aside class="content_2__inner section layout-container clearfix" role="complementary">*/
/*             {{ page.content_2 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.content_3 %}*/
/*       <div class="content_3_wrapper" style="background: {{ region_content_3_image_url }}">*/
/*         {% if region_content_3_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_3">*/
/*           <aside class="content_3__inner section layout-container clearfix" role="complementary">*/
/*             {{ page.content_3 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.content_4 %}*/
/*       <div class="content_4_wrapper" style="background: {{ region_content_4_image_url }}">*/
/*         {% if region_content_4_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_4">*/
/*           <aside class="content_4__inner section layout-container clearfix" role="complementary">*/
/*             {{ page.content_4 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.content_5 %}*/
/*       <div class="content_5_wrapper" style="background: {{ region_content_5_image_url }}">*/
/*         {% if region_content_5_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_5">*/
/*           <aside class="content_5__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.content_5 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.page_bottom %}*/
/*       <div class="page-bottom">*/
/*         <aside class="page-bottom__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.page_bottom }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <footer class="site-footer">*/
/*       {% if social_icons %}*/
/*         {{ social_icons }}*/
/*       {% endif %}*/
/*       {% if page.footer_left or page.footer_middle or page.footer_right %}*/
/*         <div class="site-footer__top layout-container clearfix">*/
/*           {{ page.footer_left }}*/
/*           {{ page.footer_middle }}*/
/*           {{ page.footer_right }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if page.footer_bottom %}*/
/*         {{ page.footer_bottom }}*/
/*       {% endif %}*/
/*     </footer>*/
/*   </div>*/
/* </div>*/
/* */
