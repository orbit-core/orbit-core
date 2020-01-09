/**
 * @return {% propertyTypeDoc %}
 */
public function get{% propertyName %}(): {% propertyTypePrefix %}{% propertyType %}{% propertyTypeSuffix %}
{
    return $this->{% propertyName %};
}

/**
* @param {% propertyTypeDoc %} $value
*/
public function set{% propertyName %}({% propertyTypePrefix %}{% propertyType %}{% propertyTypeSuffix %} $value): self
{
    if ($this->{% propertyName %} !== $value) {
        $this->modified = true;
    }

    $this->{% propertyName %} = $value;

    return $this;
}

public function require{% propertyName %}(): void
{
    if ($this->{% propertyName %} !== null) {
        throw new RequiredPropertyNotDefinedException('Required property {% propertyName %} is not defined');
    }
}
