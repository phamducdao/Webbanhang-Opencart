<?php

/* __string_template__772d5b1718d969ce2de3b5a2b2179ee2b1755c63ec22ef9ee47fdef507e34f0e */
class __TwigTemplate_a310c57d93a291000b42149b3373bb3c36b985fd83d3e348ec485f6c0680b847 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"breadcrumb\">
    <div class=\"container\">
        <div class=\"breadcrumb-inner\">
            <ul class=\"list-inline list-unstyled\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class=\"body-content outer-top-xs single-product\">
    <div class=\"container\">
        <div class=\"row\">
            <!--  SIDEBAR  -->
           
            <!--  SIDEBAR : END  -->
            <!--  CONTENT  -->
            <div class=\"col-xs-12 col-sm-12 col-md-9\">
                <div id=\"content\">

                    <div class=\"detail-block\">
                        <div class=\"row  wow fadeInUp\">
                            ";
        // line 28
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 29
            echo "                            <div class=\"col-xs-12 col-sm-6 col-md-5 gallery-holder\">
                                <div class=\"product-item-holder size-big single-product-gallery small-gallery\">

                                    <div id=\"owl-single-product\">
                                        ";
            // line 33
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 34
                echo "                                        <div class=\"single-product-gallery-item\" id=\"slide-thumb\">
                                            <a data-lightbox=\"image-1\" data-title=\"";
                // line 35
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\">
                                                <img class=\"img-responsive\" alt=\"";
                // line 36
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-echo=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        ";
            }
            // line 40
            echo "                                        ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 41
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 42
                    echo "                                            <div class=\"single-product-gallery-item\" id=\"slide-image-";
                    echo $context["key"];
                    echo "\">
                                                <a data-lightbox=\"image-1\" data-title=\"";
                    // line 43
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\">
                                                    <img class=\"img-responsive\" alt=\"";
                    // line 44
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-echo=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" />
                                                </a>
                                            </div><!-- /.single-product-gallery-item -->
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                        ";
            }
            // line 49
            echo "                                    </div><!-- /.single-product-slider -->
                                    <div class=\"single-product-gallery-thumbs gallery-thumbs\">
                                        <div id=\"owl-single-product-thumbnails\">
                                            ";
            // line 52
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 53
                echo "                                                <div class=\"item\">
                                                    <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" >
                                                        <img class=\"img-responsive\" width=\"85\" alt=\"";
                // line 55
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-echo=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" />
                                                    </a>
                                                </div>
                                            ";
            }
            // line 59
            echo "                                            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 60
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 61
                    echo "                                                    <div class=\"item\">
                                                        <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" >
                                                            <img class=\"img-responsive\" width=\"85\" alt=\"";
                    // line 63
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-echo=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" />
                                                        </a>
                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                                            ";
            }
            // line 68
            echo "                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs -->
                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            ";
        }
        // line 73
        echo "                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class=\"product-info\">
                                    <h1 class=\"name\">";
        // line 75
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                                  <div class=\"rating\">
                                                <p>";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "                                                        ";
            if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                echo "<span class=\"fa fa-stack\"><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
            } else {
                // line 79
                echo "<span
                                                                class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
            }
            // line 82
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " <a href=\"\"
                                                                    onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
        // line 83
        echo (isset($context["reviews"]) ? $context["reviews"] : null);
        echo "</a>
                                                    / <a href=\"\"
                                                         onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
        // line 85
        echo (isset($context["text_write"]) ? $context["text_write"] : null);
        echo "</a>
                                                </p>
                                               
                                                <!-- AddThis Button BEGIN -->
                                                <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 89
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a
                                                            class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a
                                                            class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a>
                                                    <a class=\"addthis_counter addthis_pill_style\"></a></div>
                                                <script type=\"text/javascript\"
                                                        src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
                                                <!-- AddThis Button END -->
                                            </div>
                                    <div class=\"product-info-description\">
                                        <ul class=\"list-unstyled\"> 
                                            ";
        // line 99
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 100
            echo "                                                <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
                                            ";
        }
        // line 102
        echo "                                            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
                                            ";
        // line 103
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 104
            echo "                                                <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
                                            ";
        }
        // line 106
        echo "                                            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
                                         \t<li><img alt=\"\" src=\"https://khoedeptainha.vn/FileUploads/imgfile/1(1).png\" style=\"color: rgb(255, 0, 0); width: 21px; height: 21px;\">Cam kết chính hãng 100%</li>
\t\t\t\t\t\t\t\t\t\t\t<li><img alt=\"\" src=\"https://khoedeptainha.vn/FileUploads/imgfile/1(1).png\" style=\"color: rgb(255, 0, 0); width: 21px; height: 21px;\"> Đổi trả hàng trong 7 ngày</li>
                                          \t<li><img alt=\"\" src=\"https://khoedeptainha.vn/FileUploads/imgfile/1(1).png\" style=\"color: rgb(255, 0, 0); width: 21px; height: 21px;\"> Được kiểm tra hàng trước khi nhận</li>

                                        </ul>
                                        ";
        // line 112
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 113
            echo "                                            <ul class=\"list-unstyled\">
                                                ";
            // line 114
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 115
                echo "                                                    <li> Giá bán:
                                                      <span style=\"color:red ; font-size:20px;\">";
                // line 116
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
                                                    </li>
                                                ";
            } else {
                // line 119
                echo "                                                    
                                                    <li> Giá bán:
                                                      <span style=\"color:red ; font-size:20px;\">";
                // line 121
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
                                                      <span style=\"text-decoration: line-through;font-size:12px ;color:#d3d3d3 ;\">";
                // line 122
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
                                                      <div style=\"height: 30px;background: #ff7878; width: 36px;border-radius: 16px;margin-left: 219px;margin-top: -27px;\"><span style=\"color:white ;font-size:11px;margin-left:4px;\">";
                // line 123
                echo (isset($context["percent"]) ? $context["percent"] : null);
                echo "</span><div>
                                                      

                                                    </li>
                                                ";
            }
            // line 128
            echo "                                               
                                                ";
            // line 129
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 130
                echo "                                                    <li>
                                                        <hr>
                                                    </li>
                                                    ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 134
                    echo "                                                        <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                                                ";
            }
            // line 137
            echo "                                            </ul>
                                        ";
        }
        // line 139
        echo "                                        <div id=\"product\">
                                            ";
        // line 140
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 141
            echo "                                                <hr>
                                                <h3>";
            // line 142
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
                                                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 144
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 145
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 147
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <select name=\"option[";
                    // line 148
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                    id=\"input-option";
                    // line 149
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                                                                <option value=\"\">";
                    // line 150
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                                                                ";
                    // line 151
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 152
                        echo "                                                                    <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                        ";
                        // line 153
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 154
                            echo "                                                                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                        ";
                        }
                        // line 155
                        echo " </option>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                                                            </select>
                                                        </div>
                                                    ";
                }
                // line 160
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 161
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 162
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 163
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 164
                        echo "                                                                    <div class=\"radio\">
                                                                        <label>
                                                                            <input type=\"radio\"
                                                                                   name=\"option[";
                        // line 167
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\"
                                                                                   value=\"";
                        // line 168
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 169
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 170
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\"
                                                                                                             class=\"img-thumbnail\"/> ";
                        }
                        // line 172
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 173
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 174
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 175
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 180
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 181
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 182
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 183
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 184
                        echo "                                                                    <div class=\"checkbox\">
                                                                        <label>
                                                                            <input type=\"checkbox\"
                                                                                   name=\"option[";
                        // line 187
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\"
                                                                                   value=\"";
                        // line 188
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 189
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 190
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\"
                                                                                                             class=\"img-thumbnail\"/> ";
                        }
                        // line 192
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 193
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 194
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 195
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 197
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 200
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 201
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 203
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <input type=\"text\" name=\"option[";
                    // line 204
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                   value=\"";
                    // line 205
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                   id=\"input-option";
                    // line 206
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                                                        </div>
                                                    ";
                }
                // line 209
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 210
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 212
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <textarea name=\"option[";
                    // line 213
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\"
                                                                      placeholder=\"";
                    // line 214
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                      id=\"input-option";
                    // line 215
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                      class=\"form-control\">";
                    // line 216
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                                                        </div>
                                                    ";
                }
                // line 219
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 220
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 221
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <button type=\"button\" id=\"button-upload";
                    // line 222
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                    data-loading-text=\"";
                    // line 223
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\"
                                                                    class=\"btn btn-default btn-block\"><i
                                                                        class=\"fa fa-upload\"></i> ";
                    // line 225
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                                                            <input type=\"hidden\" name=\"option[";
                    // line 226
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\"
                                                                   id=\"input-option";
                    // line 227
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                                                        </div>
                                                    ";
                }
                // line 230
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 231
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 233
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\" name=\"option[";
                    // line 235
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 236
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-option";
                    // line 237
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 244
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 245
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 247
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\" name=\"option[";
                    // line 249
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 250
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-option";
                    // line 251
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 258
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 259
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 261
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\" name=\"option[";
                    // line 263
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 264
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\"
                                                                       id=\"input-option";
                    // line 265
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 272
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "                                            ";
        }
        // line 274
        echo "                                            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 275
            echo "                                                <hr>
                                                <h3>";
            // line 276
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
                                                <div class=\"form-group required\">
                                                    <select name=\"recurring_id\" class=\"form-control\">
                                                        <option value=\"\">";
            // line 279
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                                                        ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 281
                echo "                                                            <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                                                    </select>
                                                    <div class=\"help-block\" id=\"recurring-description\"></div>
                                                </div>
                                            ";
        }
        // line 287
        echo "                                            <div class=\"form-group\">
                                                <label class=\"control-label\" for=\"input-quantity\">";
        // line 288
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                                                <input style=\"width:16% ;\" type=\"text\" name=\"quantity\" value=\"";
        // line 289
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                                       class=\"form-control\" />
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 291
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\"/>
                                                
                                                <button style=\"background-color: red;width:30%;margin-left: 19%;margin-top: -7%;border-radius: 6px;\" type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 293
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"
                                                        class=\"btn btn-primary btn-lg btn-block\">";
        // line 294
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
                                                 <button style=\"background-color: #e97826 ; width:36%;margin-left: 50%;margin-top: -7%;border-radius: 6px;\" type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 295
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"
                                                        class=\"btn btn-primary btn-lg btn-block\">Đặt hàng nhanh</button>
                                            </div>
                                            ";
        // line 298
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 299
            echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
                                            ";
        }
        // line 300
        echo "</div>
                                        ";
        // line 301
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 302
            echo "                                            
                                      <div class=\"boxcust\">
\t    \t\t\t\t\t\t\t\t<span id=\"alertcallforme\"></span>
\t    \t\t\t\t\t\t\t\t<h4>TƯ VẤN NHANH</h4>
                                        <form method=\"post\" action=\"http://zombiegarden.club/index.php?route=test/test\">
\t    \t\t\t\t\t\t\t\t<span id=\"formcallme\"></span>
                                        <input type=\"text\" value=\"";
            // line 308
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" name=\"product_id\" style=\" display:  none;\">
\t    \t\t\t\t\t\t\t\t<input type=\"text\" id=\"txt-cus-name\" name=\"name\" class=\"cus-name\" placeholder=\"Họ và tên\">
\t    \t\t\t\t\t\t\t\t<input type=\"tel\" id=\"txt-cus-phone\" name=\"phone\" class=\"cus-phone\" placeholder=\"Để lại số điện thoại, chúng tôi gọi lại ngay\">
\t    \t\t\t\t\t\t\t\t<button>GỬI</button>
                                        </form>
\t    \t\t\t\t\t\t\t\t<div class=\"clr\"></div>
\t   \t\t\t\t\t\t\t\t</div>
                                        ";
        }
        // line 316
        echo "                                    </div>
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class=\"product-tabs inner-bottom-xs  wow fadeInUp\" style=\"padding: 10px;\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 325
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
                            ";
        // line 326
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 327
            echo "                                <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
                            ";
        }
        // line 329
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 330
            echo "                                <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
                            ";
        }
        // line 332
        echo "                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-description\">
                                ";
        // line 335
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
                                ";
        // line 336
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 337
            echo "                                    <hr>
                                    <p>";
            // line 338
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
                                        ";
            // line 339
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 340
                echo "                                            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
                                            ";
                } else {
                    // line 341
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 342
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
                                ";
        }
        // line 344
        echo "                            </div>
                            ";
        // line 345
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 346
            echo "                                <div class=\"tab-pane\" id=\"tab-specification\">
                                    <table class=\"table table-bordered\">
                                        ";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 349
                echo "                                            <thead>
                                            <tr>
                                                <td colspan=\"2\"><strong>";
                // line 351
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
                // line 355
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 356
                    echo "                                                <tr>
                                                    <td>";
                    // line 357
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                                                    <td>";
                    // line 358
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                echo "                                            </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "                                    </table>
                                </div>
                            ";
        }
        // line 366
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 367
            echo "                                <div class=\"tab-pane\" id=\"tab-review\">
                                    <form class=\"form-horizontal\" id=\"form-review\">
                                        <div id=\"review\"></div>
                                        <h2>";
            // line 370
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                                        ";
            // line 371
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 372
                echo "                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\" for=\"input-name\">";
                // line 374
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                                                    <input type=\"text\" name=\"name\" value=\"";
                // line 375
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\"
                                                           id=\"input-name\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\"
                                                           for=\"input-review\">";
                // line 382
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                                                    <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                              class=\"form-control\"></textarea>
                                                    <div class=\"help-block\">";
                // line 385
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\">";
                // line 390
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                                                    &nbsp;&nbsp;&nbsp; ";
                // line 391
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"1\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"2\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"3\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"4\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"5\"/>
                                                    &nbsp;";
                // line 401
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                                            </div>
                                            ";
                // line 403
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                                            <div class=\"buttons clearfix\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" id=\"button-review\"
                                                            data-loading-text=\"";
                // line 407
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\"
                                                            class=\"btn btn-primary\">";
                // line 408
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 412
                echo "                                            ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                                        ";
            }
            // line 414
            echo "                                    </form>
                                </div>
                            ";
        }
        // line 417
        echo "                        </div>
                    </div><!-- /.product-tabs -->

                    ";
        // line 420
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 421
            echo "                    <section class=\"section featured-product wow fadeInUp\">
                        <h3 class=\"section-title\">";
            // line 422
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
                        <div class=\"owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs\">
                            ";
            // line 424
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 425
                echo "                            <div class=\"item item-carousel\">
                                <div class=\"products\">

                                    <div class=\"product\">
                                        <div class=\"product-image\">
                                            <div class=\"image\">
                                                <a href=\"";
                // line 431
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"> <img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
                                            </div><!-- /.image -->
                                            ";
                // line 433
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 434
                    echo "                                                <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                            ";
                }
                // line 436
                echo "                                        </div><!-- /.product-image -->


                                        <div class=\"product-info text-left\">
                                            <h3 class=\"name\"><a href=\"";
                // line 440
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                            <div class=\"product-price\">
                                                ";
                // line 442
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 443
                    echo "                                                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 444
                        echo "                                                        <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                    ";
                    } else {
                        // line 446
                        echo "                                                        <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                        <span class=\"price-before-discount\">";
                        // line 447
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                    ";
                    }
                    // line 449
                    echo "                                                ";
                }
                // line 450
                echo "                                            </div><!-- /.product-price -->
                                        </div><!-- /.product-info -->
                                        <div class=\"cart clearfix animate-effect\">
                                            <div class=\"action\">
                                                <ul class=\"list-unstyled\">
                                                    <li class=\"add-cart-button btn-group\">
                                                        <button onclick=\"cart.add('";
                // line 456
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                    </li>
                                                    <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 458
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                    <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 459
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"> <i class=\"fa fa-signal\" aria-hidden=\"true\">111</i> </a> </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            echo "                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    ";
        }
        // line 471
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
             <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">
                ";
        // line 475
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 480
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 485
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function () {
                \$('#recurring-description').html('');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-cart').button('loading');
            },
            complete: function () {
                \$('#button-cart').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('header').after('<div class=\"container\"><div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');

                    setTimeout(function () {
                        \$('#cart #cart-total').text(json['total']);
                        //\$('#cart > button').html('<span class=\"count\" id=\"cart-total\">' + json['total'] + '</span>');
                    }, 100);

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 565
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 570
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 576
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function () {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(node).button('loading');
                    },
                    complete: function () {
                        \$(node).button('reset');
                    },
                    success: function (json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function (e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 643
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

    \$('#button-review').on('click', function () {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 647
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function () {
                \$('#button-review').button('loading');
            },
            complete: function () {
                \$('#button-review').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function () {
        \$('.thumbnails').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>
";
        // line 685
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__772d5b1718d969ce2de3b5a2b2179ee2b1755c63ec22ef9ee47fdef507e34f0e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1515 => 685,  1474 => 647,  1467 => 643,  1397 => 576,  1388 => 570,  1380 => 565,  1297 => 485,  1289 => 480,  1281 => 475,  1273 => 471,  1268 => 468,  1251 => 459,  1245 => 458,  1238 => 456,  1230 => 450,  1227 => 449,  1222 => 447,  1217 => 446,  1211 => 444,  1208 => 443,  1206 => 442,  1197 => 440,  1191 => 436,  1185 => 434,  1183 => 433,  1170 => 431,  1162 => 425,  1158 => 424,  1153 => 422,  1150 => 421,  1148 => 420,  1143 => 417,  1138 => 414,  1132 => 412,  1125 => 408,  1121 => 407,  1114 => 403,  1109 => 401,  1096 => 391,  1092 => 390,  1084 => 385,  1078 => 382,  1068 => 375,  1064 => 374,  1060 => 372,  1058 => 371,  1054 => 370,  1049 => 367,  1046 => 366,  1041 => 363,  1034 => 361,  1025 => 358,  1021 => 357,  1018 => 356,  1014 => 355,  1007 => 351,  1003 => 349,  999 => 348,  995 => 346,  993 => 345,  990 => 344,  981 => 342,  974 => 341,  964 => 340,  960 => 339,  956 => 338,  953 => 337,  951 => 336,  947 => 335,  942 => 332,  936 => 330,  933 => 329,  927 => 327,  925 => 326,  921 => 325,  910 => 316,  899 => 308,  891 => 302,  889 => 301,  886 => 300,  880 => 299,  878 => 298,  872 => 295,  868 => 294,  864 => 293,  859 => 291,  854 => 289,  850 => 288,  847 => 287,  841 => 283,  830 => 281,  826 => 280,  822 => 279,  816 => 276,  813 => 275,  810 => 274,  807 => 273,  801 => 272,  791 => 265,  787 => 264,  783 => 263,  776 => 261,  768 => 259,  765 => 258,  755 => 251,  751 => 250,  747 => 249,  740 => 247,  732 => 245,  729 => 244,  719 => 237,  715 => 236,  711 => 235,  704 => 233,  696 => 231,  693 => 230,  687 => 227,  683 => 226,  679 => 225,  674 => 223,  670 => 222,  666 => 221,  659 => 220,  656 => 219,  650 => 216,  646 => 215,  642 => 214,  638 => 213,  632 => 212,  624 => 210,  621 => 209,  615 => 206,  609 => 205,  605 => 204,  599 => 203,  591 => 201,  588 => 200,  583 => 197,  575 => 195,  568 => 194,  566 => 193,  561 => 192,  548 => 190,  542 => 189,  538 => 188,  534 => 187,  529 => 184,  523 => 183,  519 => 182,  512 => 181,  509 => 180,  504 => 177,  496 => 175,  489 => 174,  487 => 173,  482 => 172,  469 => 170,  463 => 169,  459 => 168,  455 => 167,  450 => 164,  444 => 163,  440 => 162,  433 => 161,  430 => 160,  425 => 157,  418 => 155,  411 => 154,  409 => 153,  402 => 152,  398 => 151,  394 => 150,  390 => 149,  386 => 148,  380 => 147,  372 => 145,  369 => 144,  365 => 143,  361 => 142,  358 => 141,  356 => 140,  353 => 139,  349 => 137,  346 => 136,  335 => 134,  331 => 133,  326 => 130,  324 => 129,  321 => 128,  313 => 123,  309 => 122,  305 => 121,  301 => 119,  295 => 116,  292 => 115,  290 => 114,  287 => 113,  285 => 112,  273 => 106,  265 => 104,  263 => 103,  256 => 102,  246 => 100,  244 => 99,  231 => 89,  224 => 85,  219 => 83,  211 => 82,  206 => 79,  200 => 78,  196 => 77,  191 => 75,  187 => 73,  180 => 68,  177 => 67,  163 => 63,  159 => 61,  154 => 60,  151 => 59,  140 => 55,  136 => 53,  134 => 52,  129 => 49,  126 => 48,  112 => 44,  106 => 43,  101 => 42,  96 => 41,  93 => 40,  82 => 36,  76 => 35,  73 => 34,  71 => 33,  65 => 29,  63 => 28,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="breadcrumb">*/
/*     <div class="container">*/
/*         <div class="breadcrumb-inner">*/
/*             <ul class="list-inline list-unstyled">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.breadcrumb-inner -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /.breadcrumb -->*/
/* <div class="body-content outer-top-xs single-product">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <!--  SIDEBAR  -->*/
/*            */
/*             <!--  SIDEBAR : END  -->*/
/*             <!--  CONTENT  -->*/
/*             <div class="col-xs-12 col-sm-12 col-md-9">*/
/*                 <div id="content">*/
/* */
/*                     <div class="detail-block">*/
/*                         <div class="row  wow fadeInUp">*/
/*                             {% if thumb or images %}*/
/*                             <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">*/
/*                                 <div class="product-item-holder size-big single-product-gallery small-gallery">*/
/* */
/*                                     <div id="owl-single-product">*/
/*                                         {% if thumb %}*/
/*                                         <div class="single-product-gallery-item" id="slide-thumb">*/
/*                                             <a data-lightbox="image-1" data-title="{{ heading_title }}" href="{{ popup }}">*/
/*                                                 <img class="img-responsive" alt="{{ heading_title }}" src="{{ thumb }}" data-echo="{{ thumb }}" />*/
/*                                             </a>*/
/*                                         </div><!-- /.single-product-gallery-item -->*/
/*                                         {% endif %}*/
/*                                         {% if images %}*/
/*                                             {% for key, image in images %}*/
/*                                             <div class="single-product-gallery-item" id="slide-image-{{ key }}">*/
/*                                                 <a data-lightbox="image-1" data-title="{{ heading_title }}" href="{{ image.popup }}">*/
/*                                                     <img class="img-responsive" alt="{{ heading_title }}" src="{{ image.thumb }}" data-echo="{{ image.thumb }}" />*/
/*                                                 </a>*/
/*                                             </div><!-- /.single-product-gallery-item -->*/
/*                                             {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </div><!-- /.single-product-slider -->*/
/*                                     <div class="single-product-gallery-thumbs gallery-thumbs">*/
/*                                         <div id="owl-single-product-thumbnails">*/
/*                                             {% if thumb %}*/
/*                                                 <div class="item">*/
/*                                                     <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" >*/
/*                                                         <img class="img-responsive" width="85" alt="{{ heading_title }}" src="{{ thumb }}" data-echo="{{ popup }}" />*/
/*                                                     </a>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             {% if images %}*/
/*                                                 {% for key, image in images %}*/
/*                                                     <div class="item">*/
/*                                                         <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" >*/
/*                                                             <img class="img-responsive" width="85" alt="{{ heading_title }}" src="{{ image.thumb }}" data-echo="{{ image.popup }}" />*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}*/
/*                                         </div><!-- /#owl-single-product-thumbnails -->*/
/*                                     </div><!-- /.gallery-thumbs -->*/
/*                                 </div><!-- /.single-product-gallery -->*/
/*                             </div><!-- /.gallery-holder -->*/
/*                             {% endif %}*/
/*                             <div class='col-sm-6 col-md-7 product-info-block'>*/
/*                                 <div class="product-info">*/
/*                                     <h1 class="name">{{ heading_title }}</h1>*/
/*                                   <div class="rating">*/
/*                                                 <p>{% for i in 1..5 %}*/
/*                                                         {% if rating < i %}<span class="fa fa-stack"><i*/
/*                                                                     class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span*/
/*                                                                 class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i*/
/*                                                                     class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                                                     {% endfor %} <a href=""*/
/*                                                                     onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a>*/
/*                                                     / <a href=""*/
/*                                                          onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a>*/
/*                                                 </p>*/
/*                                                */
/*                                                 <!-- AddThis Button BEGIN -->*/
/*                                                 <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a*/
/*                                                             class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a*/
/*                                                             class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a>*/
/*                                                     <a class="addthis_counter addthis_pill_style"></a></div>*/
/*                                                 <script type="text/javascript"*/
/*                                                         src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/*                                                 <!-- AddThis Button END -->*/
/*                                             </div>*/
/*                                     <div class="product-info-description">*/
/*                                         <ul class="list-unstyled"> */
/*                                             {% if manufacturer %}*/
/*                                                 <li>{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                                             {% endif %}*/
/*                                             <li>{{ text_model }} {{ model}}</li>*/
/*                                             {% if reward %}*/
/*                                                 <li>{{ text_reward }} {{ reward }}</li>*/
/*                                             {% endif %}*/
/*                                             <li>{{ text_stock }} {{ stock }}</li>*/
/*                                          	<li><img alt="" src="https://khoedeptainha.vn/FileUploads/imgfile/1(1).png" style="color: rgb(255, 0, 0); width: 21px; height: 21px;">Cam kết chính hãng 100%</li>*/
/* 											<li><img alt="" src="https://khoedeptainha.vn/FileUploads/imgfile/1(1).png" style="color: rgb(255, 0, 0); width: 21px; height: 21px;"> Đổi trả hàng trong 7 ngày</li>*/
/*                                           	<li><img alt="" src="https://khoedeptainha.vn/FileUploads/imgfile/1(1).png" style="color: rgb(255, 0, 0); width: 21px; height: 21px;"> Được kiểm tra hàng trước khi nhận</li>*/
/* */
/*                                         </ul>*/
/*                                         {% if price %}*/
/*                                             <ul class="list-unstyled">*/
/*                                                 {% if not special %}*/
/*                                                     <li> Giá bán:*/
/*                                                       <span style="color:red ; font-size:20px;">{{ price }}</span>*/
/*                                                     </li>*/
/*                                                 {% else %}*/
/*                                                     */
/*                                                     <li> Giá bán:*/
/*                                                       <span style="color:red ; font-size:20px;">{{ special }}</span>*/
/*                                                       <span style="text-decoration: line-through;font-size:12px ;color:#d3d3d3 ;">{{ price }}</span>*/
/*                                                       <div style="height: 30px;background: #ff7878; width: 36px;border-radius: 16px;margin-left: 219px;margin-top: -27px;"><span style="color:white ;font-size:11px;margin-left:4px;">{{percent}}</span><div>*/
/*                                                       */
/* */
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                                */
/*                                                 {% if discounts %}*/
/*                                                     <li>*/
/*                                                         <hr>*/
/*                                                     </li>*/
/*                                                     {% for discount in discounts %}*/
/*                                                         <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             </ul>*/
/*                                         {% endif %}*/
/*                                         <div id="product">*/
/*                                             {% if options %}*/
/*                                                 <hr>*/
/*                                                 <h3>{{ text_option }}</h3>*/
/*                                                 {% for option in options %}*/
/*                                                     {% if option.type == 'select' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <select name="option[{{ option.product_option_id }}]"*/
/*                                                                     id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                                                                 <option value="">{{ text_select }}</option>*/
/*                                                                 {% for option_value in option.product_option_value %}*/
/*                                                                     <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                                                                         {% if option_value.price %}*/
/*                                                                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                         {% endif %} </option>*/
/*                                                                 {% endfor %}*/
/*                                                             </select>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'radio' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                                     <div class="radio">*/
/*                                                                         <label>*/
/*                                                                             <input type="radio"*/
/*                                                                                    name="option[{{ option.product_option_id }}]"*/
/*                                                                                    value="{{ option_value.product_option_value_id }}"/>*/
/*                                                                             {% if option_value.image %} <img src="{{ option_value.image }}"*/
/*                                                                                                              alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}"*/
/*                                                                                                              class="img-thumbnail"/> {% endif %}*/
/*                                                                             {{ option_value.name }}*/
/*                                                                             {% if option_value.price %}*/
/*                                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                             {% endif %} </label>*/
/*                                                                     </div>*/
/*                                                                 {% endfor %} </div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'checkbox' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                                     <div class="checkbox">*/
/*                                                                         <label>*/
/*                                                                             <input type="checkbox"*/
/*                                                                                    name="option[{{ option.product_option_id }}][]"*/
/*                                                                                    value="{{ option_value.product_option_value_id }}"/>*/
/*                                                                             {% if option_value.image %} <img src="{{ option_value.image }}"*/
/*                                                                                                              alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}"*/
/*                                                                                                              class="img-thumbnail"/> {% endif %}*/
/*                                                                             {{ option_value.name }}*/
/*                                                                             {% if option_value.price %}*/
/*                                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                             {% endif %} </label>*/
/*                                                                     </div>*/
/*                                                                 {% endfor %} </div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'text' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                    value="{{ option.value }}" placeholder="{{ option.name }}"*/
/*                                                                    id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'textarea' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <textarea name="option[{{ option.product_option_id }}]" rows="5"*/
/*                                                                       placeholder="{{ option.name }}"*/
/*                                                                       id="input-option{{ option.product_option_id }}"*/
/*                                                                       class="form-control">{{ option.value }}</textarea>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'file' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <button type="button" id="button-upload{{ option.product_option_id }}"*/
/*                                                                     data-loading-text="{{ text_loading }}"*/
/*                                                                     class="btn btn-default btn-block"><i*/
/*                                                                         class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                                                             <input type="hidden" name="option[{{ option.product_option_id }}]" value=""*/
/*                                                                    id="input-option{{ option.product_option_id }}"/>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'date' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group date">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="YYYY-MM-DD"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'datetime' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group datetime">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'time' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group time">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="HH:mm"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}*/
/*                                             {% if recurrings %}*/
/*                                                 <hr>*/
/*                                                 <h3>{{ text_payment_recurring }}</h3>*/
/*                                                 <div class="form-group required">*/
/*                                                     <select name="recurring_id" class="form-control">*/
/*                                                         <option value="">{{ text_select }}</option>*/
/*                                                         {% for recurring in recurrings %}*/
/*                                                             <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                     <div class="help-block" id="recurring-description"></div>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*                                                 <input style="width:16% ;" type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity"*/
/*                                                        class="form-control" />*/
/*                                                 <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*                                                 */
/*                                                 <button style="background-color: red;width:30%;margin-left: 19%;margin-top: -7%;border-radius: 6px;" type="button" id="button-cart" data-loading-text="{{ text_loading }}"*/
/*                                                         class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*                                                  <button style="background-color: #e97826 ; width:36%;margin-left: 50%;margin-top: -7%;border-radius: 6px;" type="button" id="button-cart" data-loading-text="{{ text_loading }}"*/
/*                                                         class="btn btn-primary btn-lg btn-block">Đặt hàng nhanh</button>*/
/*                                             </div>*/
/*                                             {% if minimum > 1 %}*/
/*                                                 <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*                                             {% endif %}</div>*/
/*                                         {% if review_status %}*/
/*                                             */
/*                                       <div class="boxcust">*/
/* 	    								<span id="alertcallforme"></span>*/
/* 	    								<h4>TƯ VẤN NHANH</h4>*/
/*                                         <form method="post" action="http://zombiegarden.club/index.php?route=test/test">*/
/* 	    								<span id="formcallme"></span>*/
/*                                         <input type="text" value="{{ product_id }}" name="product_id" style=" display:  none;">*/
/* 	    								<input type="text" id="txt-cus-name" name="name" class="cus-name" placeholder="Họ và tên">*/
/* 	    								<input type="tel" id="txt-cus-phone" name="phone" class="cus-phone" placeholder="Để lại số điện thoại, chúng tôi gọi lại ngay">*/
/* 	    								<button>GỬI</button>*/
/*                                         </form>*/
/* 	    								<div class="clr"></div>*/
/* 	   								</div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div><!-- /.product-info -->*/
/*                             </div><!-- /.col-sm-7 -->*/
/*                         </div><!-- /.row -->*/
/*                     </div>*/
/* */
/*                     <div class="product-tabs inner-bottom-xs  wow fadeInUp" style="padding: 10px;">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active">*/
/*                                 <a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*                             {% if attribute_groups %}*/
/*                                 <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*                             {% endif %}*/
/*                             {% if review_status %}*/
/*                                 <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab-description">*/
/*                                 {{ description }}*/
/*                                 {% if tags %}*/
/*                                     <hr>*/
/*                                     <p>{{ text_tags }}*/
/*                                         {% for i in 0..tags|length %}*/
/*                                             {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*                                             {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*                                         {% endfor %} </p>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% if attribute_groups %}*/
/*                                 <div class="tab-pane" id="tab-specification">*/
/*                                     <table class="table table-bordered">*/
/*                                         {% for attribute_group in attribute_groups %}*/
/*                                             <thead>*/
/*                                             <tr>*/
/*                                                 <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                                             </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/*                                             {% for attribute in attribute_group.attribute %}*/
/*                                                 <tr>*/
/*                                                     <td>{{ attribute.name }}</td>*/
/*                                                     <td>{{ attribute.text }}</td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         {% endfor %}*/
/*                                     </table>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if review_status %}*/
/*                                 <div class="tab-pane" id="tab-review">*/
/*                                     <form class="form-horizontal" id="form-review">*/
/*                                         <div id="review"></div>*/
/*                                         <h2>{{ text_write }}</h2>*/
/*                                         {% if review_guest %}*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                                                     <input type="text" name="name" value="{{ customer_name }}"*/
/*                                                            id="input-name" class="form-control"/>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label"*/
/*                                                            for="input-review">{{ entry_review }}</label>*/
/*                                                     <textarea name="text" rows="5" id="input-review"*/
/*                                                               class="form-control"></textarea>*/
/*                                                     <div class="help-block">{{ text_note }}</div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label">{{ entry_rating }}</label>*/
/*                                                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                                                     <input type="radio" name="rating" value="1"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="2"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="3"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="4"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="5"/>*/
/*                                                     &nbsp;{{ entry_good }}</div>*/
/*                                             </div>*/
/*                                             {{ captcha }}*/
/*                                             <div class="buttons clearfix">*/
/*                                                 <div class="pull-right">*/
/*                                                     <button type="button" id="button-review"*/
/*                                                             data-loading-text="{{ text_loading }}"*/
/*                                                             class="btn btn-primary">{{ button_continue }}</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% else %}*/
/*                                             {{ text_login }}*/
/*                                         {% endif %}*/
/*                                     </form>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div><!-- /.product-tabs -->*/
/* */
/*                     {% if products %}*/
/*                     <section class="section featured-product wow fadeInUp">*/
/*                         <h3 class="section-title">{{ text_related }}</h3>*/
/*                         <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">*/
/*                             {% for product in products %}*/
/*                             <div class="item item-carousel">*/
/*                                 <div class="products">*/
/* */
/*                                     <div class="product">*/
/*                                         <div class="product-image">*/
/*                                             <div class="image">*/
/*                                                 <a href="{{ product.href }}" title="{{ product.name }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/></a>*/
/*                                             </div><!-- /.image -->*/
/*                                             {% if product.percent %}*/
/*                                                 <div class="tag sale"><span>-{{ product.percent }}%</span></div>*/
/*                                             {% endif %}*/
/*                                         </div><!-- /.product-image -->*/
/* */
/* */
/*                                         <div class="product-info text-left">*/
/*                                             <h3 class="name"><a href="{{ product.href }}" title="{{ product.name }}">{{ product.name }}</a></h3>*/
/*                                             <div class="product-price">*/
/*                                                 {% if product.price %}*/
/*                                                     {% if not product.special %}*/
/*                                                         <span class="price"> {{ product.price }} </span>*/
/*                                                     {% else %}*/
/*                                                         <span class="price">{{ product.special }}</span>*/
/*                                                         <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                     {% endif %}*/
/*                                                 {% endif %}*/
/*                                             </div><!-- /.product-price -->*/
/*                                         </div><!-- /.product-info -->*/
/*                                         <div class="cart clearfix animate-effect">*/
/*                                             <div class="action">*/
/*                                                 <ul class="list-unstyled">*/
/*                                                     <li class="add-cart-button btn-group">*/
/*                                                         <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                     </li>*/
/*                                                     <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                     <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true">111</i> </a> </li>*/
/*                                                 </ul>*/
/*                                             </div><!-- /.action -->*/
/*                                         </div><!-- /.cart -->*/
/*                                     </div><!-- /.product -->*/
/* */
/*                                 </div><!-- /.products -->*/
/*                             </div><!-- /.item -->*/
/*                             {% endfor %}*/
/*                         </div><!-- /.home-owl-carousel -->*/
/*                     </section><!-- /.section -->*/
/*                     {% endif %}*/
/*                     {{ content_top }}*/
/*                 </div>*/
/*             </div>*/
/*              <div class="col-xs-12 col-sm-12 col-md-3 sidebar">*/
/*                 {{ column_left }}*/
/*             </div>*/
/*             <!--  CONTENT : END  -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {{ column_right }}*/
/* <script type="text/javascript"><!--*/
/*     $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/getRecurringDescription',*/
/*             type: 'post',*/
/*             data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#recurring-description').html('');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/* */
/*                 if (json['success']) {*/
/*                     $('#recurring-description').html(json['success']);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#button-cart').on('click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/cart/add',*/
/*             type: 'post',*/
/*             data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-cart').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-cart').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['error']) {*/
/*                     if (json['error']['option']) {*/
/*                         for (i in json['error']['option']) {*/
/*                             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*                             if (element.parent().hasClass('input-group')) {*/
/*                                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             } else {*/
/*                                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             }*/
/*                         }*/
/*                     }*/
/* */
/*                     if (json['error']['recurring']) {*/
/*                         $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('header').after('<div class="container"><div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');*/
/* */
/*                     setTimeout(function () {*/
/*                         $('#cart #cart-total').text(json['total']);*/
/*                         //$('#cart > button').html('<span class="count" id="cart-total">' + json['total'] + '</span>');*/
/*                     }, 100);*/
/* */
/*                     $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/*                     $('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('.date').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: false*/
/*     });*/
/* */
/*     $('button[id^=\'button-upload\']').on('click', function () {*/
/*         var node = this;*/
/* */
/*         $('#form-upload').remove();*/
/* */
/*         $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*         $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*         if (typeof timer != 'undefined') {*/
/*             clearInterval(timer);*/
/*         }*/
/* */
/*         timer = setInterval(function () {*/
/*             if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*                 clearInterval(timer);*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=tool/upload',*/
/*                     type: 'post',*/
/*                     dataType: 'json',*/
/*                     data: new FormData($('#form-upload')[0]),*/
/*                     cache: false,*/
/*                     contentType: false,*/
/*                     processData: false,*/
/*                     beforeSend: function () {*/
/*                         $(node).button('loading');*/
/*                     },*/
/*                     complete: function () {*/
/*                         $(node).button('reset');*/
/*                     },*/
/*                     success: function (json) {*/
/*                         $('.text-danger').remove();*/
/* */
/*                         if (json['error']) {*/
/*                             $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*                         }*/
/* */
/*                         if (json['success']) {*/
/*                             alert(json['success']);*/
/* */
/*                             $(node).parent().find('input').val(json['code']);*/
/*                         }*/
/*                     },*/
/*                     error: function (xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         }, 500);*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#review').delegate('.pagination a', 'click', function (e) {*/
/*         e.preventDefault();*/
/* */
/*         $('#review').fadeOut('slow');*/
/* */
/*         $('#review').load(this.href);*/
/* */
/*         $('#review').fadeIn('slow');*/
/*     });*/
/* */
/*     $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*     $('#button-review').on('click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*             type: 'post',*/
/*             dataType: 'json',*/
/*             data: $("#form-review").serialize(),*/
/*             beforeSend: function () {*/
/*                 $('#button-review').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-review').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible').remove();*/
/* */
/*                 if (json['error']) {*/
/*                     $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*                     $('input[name=\'name\']').val('');*/
/*                     $('textarea[name=\'text\']').val('');*/
/*                     $('input[name=\'rating\']:checked').prop('checked', false);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $(document).ready(function () {*/
/*         $('.thumbnails').magnificPopup({*/
/*             type: 'image',*/
/*             delegate: 'a',*/
/*             gallery: {*/
/*                 enabled: true*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* {{ footer }}*/
