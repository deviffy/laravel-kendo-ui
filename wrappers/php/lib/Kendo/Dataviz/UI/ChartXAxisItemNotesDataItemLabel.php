<?php

namespace Kendo\Dataviz\UI;

class ChartXAxisItemNotesDataItemLabel extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The background color of the label. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
    * The border of the label.
    * @param \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabelBorder|array $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
    * The text color of the note label. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The font style of the note label.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
    * Sets the template option of the ChartXAxisItemNotesDataItemLabel.
    * The template which renders the labels.The fields which can be used in the template are:
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function templateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('template', $value);
    }

    /**
    * Sets the template option of the ChartXAxisItemNotesDataItemLabel.
    * The template which renders the labels.The fields which can be used in the template are:
    * @param string $value The template content.
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * If set to true the chart will display the x axis notes label. By default the x axis notes label are visible.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
    * The rotation angle of the label. By default the label are not rotated.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function rotation($value) {
        return $this->setProperty('rotation', $value);
    }

    /**
    * The format used to display the note label. Uses kendo.format. Contains one placeholder ("{0}") which represents the axis value.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
    * The label note text.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * The position of the x axis note label.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemLabel
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

//<< Properties
}

?>
