<?php
namespace Core\HTML;

class TemplateForm extends Form{

    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $required = isset($options['required']) ? $options['required'] : 'true';
        $value = isset($options['value']) ? $options['value'] : "";
        $placeholder = isset($options['placeholder']) ? $options['placeholder'] :"";
        $label = '<label>' . $label . '</label>';
        if($type === 'textarea'){
            if($required ==='true'){
                $input = '<textarea name="' . $name . '" class="form-control" placeholder="'.$placeholder.'" '.' required>' .$value  . '</textarea>';
            }else{
                $input = '<textarea name="' . $name . '" class="form-control"placeholder="'.$placeholder.'">' . $value . '</textarea>';
            }
        } else{
            if ($required ==='true'){
                $input = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" class="form-control" placeholder="'.$placeholder.'" required>';
            }
            else{
                $input = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" class="form-control"placeholder="'.$placeholder.'">';
            }
        }
        return $this->surround($label . $input);
    }

    public function select($name, $label,$tag ,$options){
        $label = '<label>' . $label . '</label>';
        $input = '<select class="form-control" name="' . $name .'"';
        if($tag !=false){
            foreach($tag as $k =>$v){
                $input .= $k.'="'.$v.'"';
            }
        }
        $input.='>';
        array_unshift($options, '');
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
    }

    public function submit($value,$name){
        return $this->surround('<button type="submit" class="btn btn-primary" name="'.$name.'">'.$value.'</button>');
    }
}