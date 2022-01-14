<?php

echo 1;

class ClassName
{
	public $var;

	/**
	 * Getter
	 *
	 * @return void
	 */
	public function getVar()
	{
		return $this->var;
	}

	/**
	 * Setter
	 *
	 * @param string $var
	 * @return void
	 */
	public function setVar(string $var)
	{
		$this->var = $var;

		return $this;
	}
}
