<?php
	# dollar sign precedes variables
	$heading = 'Hello World';
	# array (can be singe or double quotes)
	$fruitz = array('Apple', 'Orange', "Grapes");
	$fruit = array('fruit1' => 'Apple','fruit2' => 'Orange','fruit3' => "Grapes");
	foreach($fruitz as $fruit) {
		echo $fruit;
	};

	function sayHello($words) {
		echo $words;
	}

	sayHello("Wassup");

?>

	<ul>
	<?php foreach($fruitz as $fruit) : ?>
		<li><?php echo $fruit; ?>
	<?php endforeach; ?>
	</ul>

<h1><?php echo $heading; ?><h1>
<h2><?php echo $fruitz[0]; ?><h2>
<h3><?php echo $fruit['fruit2']; ?><h3>
<?php
class A
{
    public function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();

$b = new B();
$b->bar();

B::bar();

class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

class Author {
    protected $email;
		protected $name;
		protected $word = "word";

		public function sayWord() {
			echo $this->word;
		}


		public function __construct($author){
			$this->author = $author;
	}
}
$c = new Author();
class Article {
	protected $title;
	protected $body;
	protected $status;
	/**
	 * Gets the title
	 *
	 * @return string
	 */
	public function getTitle()
	{
			return $this->title;
	}
	/**
	 * Gets the body
	 *
	 * @return string
	 */
	public function getBody()
	{
			return $this->body;	
	}
	/**
	 * Gets the status
	 *
	 * @return string
	 */
	public function getStatus()
	{
			return $this->status;
	}
	/**
	 * Sets the title parameter
	 *
	 * @param string $title The article title
	 *
	 * @return void
	 */
	public function setTitle($title)
	{
			$this->title = $title;
	}
	/**
	 * Sets the body parameter
	 *
	 * @param string $body The article body
	 *
	 * @return void
	 */
	public function setBody($body)
	{
			$this->body = $body;
	}
	/**
	 * Validate the object.
	 *
	 * Ensure that the title, body, status, and author have been set.
	 * Ensure that the title is not longer than 80 characters.
	 * Ensure that the body has no HTML tags.
	 * Ensure that the status is either 'Active' or 'Inactive'.
	 *
	 * If any assertions fail, a LogicException will be thrown with
	 * appropriate messages.
	 *
	 * @throws LogicException
	 *
	 * @return void
	 */
	public function validate()
	{
			// @todo implement me!
	}
}