<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PHP: Visibility - Manual </title>

 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.visibility.php">
 <link rel="shorturl" href="https://www.php.net/oop5.visibility">
 <link rel="alternate" href="https://www.php.net/oop5.visibility" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.decon.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.inheritance.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.visibility.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.visibility.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.visibility.php" hreflang="zh">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.visibility.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.visibility.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.visibility.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.visibility.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.visibility.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.visibility.php" hreflang="tr">

<link rel="stylesheet" type="text/css" href="/cached.php?t=1639034403&amp;f=/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1539765004&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1662054602&amp;f=/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1662054602&amp;f=/styles/theme-medium.css" media="screen">

 <base href="https://www.php.net/manual/en/language.oop5.visibility.php">


</head>
<body class="docs ">

<nav id="head-nav" class="navbar navbar-fixed-top">
  <div class="navbar-inner clearfix">
    <a href="/" class="brand"><img src="/images/logos/php-logo.svg" width="48" height="24" alt="php"></a>
    <div id="mainmenu-toggle-overlay"></div>
    <input type="checkbox" id="mainmenu-toggle">
    <ul class="nav">
      <li class=""><a href="/downloads">Downloads</a></li>
      <li class="active"><a href="/docs.php">Documentation</a></li>
      <li class=""><a href="/get-involved" >Get Involved</a></li>
      <li class=""><a href="/support">Help</a></li>
      <li class="">
        <a href="/releases/8.1/index.php">
          <img src="/images/php8/logo_php8_1.svg" alt="php8.1" height="22" width="60">
        </a>
      </li>
    </ul>
    <form class="navbar-search" id="topsearch" action="/search.php">
      <input type="hidden" name="show" value="quickref">
      <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
    </form>
  </div>
  <div id="flash-message"></div>
</nav>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.xforms.php'>Dealing with XForms</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="language.oop5.inheritance.php">
          Object Inheritance &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.decon.php">
          &laquo; Constructors and Destructors        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/language.oop5.visibility.php' selected="selected">English</option>
            <option value='pt_BR/language.oop5.visibility.php'>Brazilian Portuguese</option>
            <option value='zh/language.oop5.visibility.php'>Chinese (Simplified)</option>
            <option value='fr/language.oop5.visibility.php'>French</option>
            <option value='de/language.oop5.visibility.php'>German</option>
            <option value='ja/language.oop5.visibility.php'>Japanese</option>
            <option value='ru/language.oop5.visibility.php'>Russian</option>
            <option value='es/language.oop5.visibility.php'>Spanish</option>
            <option value='tr/language.oop5.visibility.php'>Turkish</option>
            <option value="help-translate.php">Other</option>
          </select>
        </fieldset>
      </form>
    </div>
    <div class="edit-bug">
      <a href="https://github.com/php/doc-en/blob/master/language/oop5/visibility.xml">Submit a Pull Request</a>
      <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.visibility%0A%0A---">Report a Bug</a>
    </div>
  </div><div id="language.oop5.visibility" class="sect1">
  <h2 class="title">Visibility</h2>
  <p class="para">
   The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing
   the declaration with the keywords <code class="literal">public</code>,
   <code class="literal">protected</code> or
   <code class="literal">private</code>. Class members declared public can be
   accessed everywhere. Members declared protected can be accessed
   only within the class itself and by inheriting and parent
   classes. Members declared as private may only be accessed by the
   class that defines the member.
  </p>

  <div class="sect2" id="language.oop5.visibility-members">
   <h3 class="title">Property Visibility</h3>
   <p class="para">
    Class properties may be defined as public, private, or
    protected. Properties declared without any explicit visibility
    keyword are defined as public.
   </p>
   <p class="para">
    <div class="example" id="example-234">
     <p><strong>Example #1 Property declaration</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br />&nbsp;*&nbsp;Define&nbsp;MyClass<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;</span><span style="color: #0000BB">$public&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Public'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;</span><span style="color: #0000BB">$protected&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Protected'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #0000BB">$private&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Private'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;</span><span style="color: #0000BB">printHello</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #0000BB">$obj&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br />echo&nbsp;</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Works<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printHello</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Shows&nbsp;Public,&nbsp;Protected&nbsp;and&nbsp;Private<br /><br /><br />/**<br />&nbsp;*&nbsp;Define&nbsp;MyClass2<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">MyClass2&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;We&nbsp;can&nbsp;redeclare&nbsp;the&nbsp;public&nbsp;and&nbsp;protected&nbsp;properties,&nbsp;but&nbsp;not&nbsp;private<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">$public&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Public2'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;</span><span style="color: #0000BB">$protected&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Protected2'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;</span><span style="color: #0000BB">printHello</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #0000BB">$obj2&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">();<br />echo&nbsp;</span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Works<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Undefined<br /></span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printHello</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Shows&nbsp;Public2,&nbsp;Protected2,&nbsp;Undefined<br /><br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect2" id="language.oop5.visiblity-methods">
   <h3 class="title">Method Visibility</h3>
   <p class="para">
    Class methods may be defined as public, private, or
    protected. Methods declared without any explicit visibility
    keyword are defined as public.
   </p>
   <p class="para">
    <div class="example" id="example-235">
     <p><strong>Example #2 Method Declaration</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br />&nbsp;*&nbsp;Define&nbsp;MyClass<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Declare&nbsp;a&nbsp;public&nbsp;constructor<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()&nbsp;{&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Declare&nbsp;a&nbsp;public&nbsp;method<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">()&nbsp;{&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Declare&nbsp;a&nbsp;protected&nbsp;method<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">()&nbsp;{&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Declare&nbsp;a&nbsp;private&nbsp;method<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">private&nbsp;function&nbsp;</span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">()&nbsp;{&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;This&nbsp;is&nbsp;public<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">Foo</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #0000BB">$myclass&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Works<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Foo</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Public,&nbsp;Protected&nbsp;and&nbsp;Private&nbsp;work<br /><br /><br />/**<br />&nbsp;*&nbsp;Define&nbsp;MyClass2<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">MyClass2&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;This&nbsp;is&nbsp;public<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">Foo2</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">$myclass2&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$myclass2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Works<br /></span><span style="color: #0000BB">$myclass2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Foo2</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Public&nbsp;and&nbsp;Protected&nbsp;work,&nbsp;not&nbsp;Private<br /><br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bar&nbsp;<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">test</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testPrivate</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testPublic</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testPublic</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Bar::testPublic\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;function&nbsp;</span><span style="color: #0000BB">testPrivate</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Bar::testPrivate\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br />class&nbsp;</span><span style="color: #0000BB">Foo&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Bar&nbsp;<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testPublic</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Foo::testPublic\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;function&nbsp;</span><span style="color: #0000BB">testPrivate</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Foo::testPrivate\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #0000BB">$myFoo&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$myFoo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">test</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Bar::testPrivate&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Foo::testPublic<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect2" id="language.oop5.visiblity-constants">
   <h3 class="title">Constant Visibility</h3>
   <p class="para">
    As of PHP 7.1.0, class constants may be defined as public, private, or
    protected. Constants declared without any explicit visibility
    keyword are defined as public.
   </p>
   <p class="para">
    <div class="example" id="example-236">
     <p><strong>Example #3 Constant Declaration as of PHP 7.1.0</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br />&nbsp;*&nbsp;Define&nbsp;MyClass<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Declare&nbsp;a&nbsp;public&nbsp;constant<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;const&nbsp;</span><span style="color: #0000BB">MY_PUBLIC&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'public'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Declare&nbsp;a&nbsp;protected&nbsp;constant<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">protected&nbsp;const&nbsp;</span><span style="color: #0000BB">MY_PROTECTED&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'protected'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Declare&nbsp;a&nbsp;private&nbsp;constant<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">private&nbsp;const&nbsp;</span><span style="color: #0000BB">MY_PRIVATE&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'private'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PROTECTED</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PRIVATE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #0000BB">$myclass&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Works<br /></span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PROTECTED</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br /></span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PRIVATE</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Public,&nbsp;Protected&nbsp;and&nbsp;Private&nbsp;work<br /><br /><br />/**<br />&nbsp;*&nbsp;Define&nbsp;MyClass2<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">MyClass2&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;This&nbsp;is&nbsp;public<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">foo2</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PROTECTED</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PRIVATE</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Fatal&nbsp;Error<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">$myclass2&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Works<br /></span><span style="color: #0000BB">$myclass2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo2</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;Public&nbsp;and&nbsp;Protected&nbsp;work,&nbsp;not&nbsp;Private<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect2" id="language.oop5.visibility-other-objects">
   <h3 class="title">Visibility from other objects</h3>
   <p class="para">
    Objects of the same type will have access to each others private and
    protected members even though they are not the same instances. This is
    because the implementation specific details are already known when inside
    those objects.
   </p>
   <div class="example" id="example-237">
    <p><strong>Example #4 Accessing private members of the same object type</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Test<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;function&nbsp;</span><span style="color: #0000BB">bar</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Accessed&nbsp;the&nbsp;private&nbsp;method.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">baz</span><span style="color: #007700">(</span><span style="color: #0000BB">Test&nbsp;$other</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;We&nbsp;can&nbsp;change&nbsp;the&nbsp;private&nbsp;property:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$other</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$other</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;We&nbsp;can&nbsp;also&nbsp;call&nbsp;the&nbsp;private&nbsp;method:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$other</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #0000BB">$test&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Test</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baz</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">Test</span><span style="color: #007700">(</span><span style="color: #DD0000">'other'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
string(5) &quot;hello&quot;
Accessed the private method.
</pre></div>
    </div>
   </div>
  </div>
 </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.visibility&amp;redirect=https://www.php.net/manual/en/language.oop5.visibility.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108711">  <div class="votes">
    <div id="Vu108711">
    <a href="/manual/vote-note.php?id=108711&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108711">
    <a href="/manual/vote-note.php?id=108711&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108711" title="75% like this...">
    287
    </div>
  </div>
  <a href="#108711" class="name">
  <strong class="user"><em>wbcarts at juno dot com</em></strong></a><a class="genanchor" href="#108711"> &para;</a><div class="date" title="2012-05-19 08:27"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom108711">
<div class="phpcode"><code><span class="html">
INSIDE CODE and OUTSIDE CODE<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Item<br /></span><span class="keyword">{<br />&nbsp; </span><span class="comment">/**<br />&nbsp;&nbsp; * This is INSIDE CODE because it is written INSIDE the class.<br />&nbsp;&nbsp; */<br />&nbsp; </span><span class="keyword">public </span><span class="default">$label</span><span class="keyword">;<br />&nbsp; public </span><span class="default">$price</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * This is OUTSIDE CODE because it is written OUTSIDE the class.<br /> */<br /></span><span class="default">$item </span><span class="keyword">= new </span><span class="default">Item</span><span class="keyword">();<br /></span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">label </span><span class="keyword">= </span><span class="string">'Ink-Jet Tatoo Gun'</span><span class="keyword">;<br /></span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">price </span><span class="keyword">= </span><span class="default">49.99</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Ok, that's simple enough... I got it inside and out. The big problem with this is that the Item class is COMPLETELY IGNORANT in the following ways:<br />* It REQUIRES OUTSIDE CODE to do all the work AND to know what and how to do it -- huge mistake.<br />* OUTSIDE CODE can cast Item properties to any other PHP types (booleans, integers, floats, strings, arrays, and objects etc.) -- another huge mistake.<br /><br />Note: we did it correctly above, but what if someone made an array for $price? FYI: PHP has no clue what we mean by an Item, especially by the terms of our class definition above. To PHP, our Item is something with two properties (mutable in every way) and that's it. As far as PHP is concerned, we can pack the entire set of Britannica Encyclopedias into the price slot. When that happens, we no longer have what we expect an Item to be.<br /><br />INSIDE CODE should keep the integrity of the object. For example, our class definition should keep $label a string and $price a float -- which means only strings can come IN and OUT of the class for label, and only floats can come IN and OUT of the class for price.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Item<br /></span><span class="keyword">{<br />&nbsp; </span><span class="comment">/**<br />&nbsp;&nbsp; * Here's the new INSIDE CODE and the Rules to follow:<br />&nbsp;&nbsp; *<br />&nbsp;&nbsp; * 1. STOP ACCESS to properties via $item-&gt;label and $item-&gt;price,<br />&nbsp;&nbsp; *&nbsp; &nbsp; by using the protected keyword.<br />&nbsp;&nbsp; * 2. FORCE the use of public functions.<br />&nbsp;&nbsp; * 3. ONLY strings are allowed IN &amp; OUT of this class for $label<br />&nbsp;&nbsp; *&nbsp; &nbsp; via the getLabel and setLabel functions.<br />&nbsp;&nbsp; * 4. ONLY floats are allowed IN &amp; OUT of this class for $price<br />&nbsp;&nbsp; *&nbsp; &nbsp; via the getPrice and setPrice functions.<br />&nbsp;&nbsp; */<br /><br />&nbsp; </span><span class="keyword">protected </span><span class="default">$label </span><span class="keyword">= </span><span class="string">'Unknown Item'</span><span class="keyword">; </span><span class="comment">// Rule 1 - protected.<br />&nbsp; </span><span class="keyword">protected </span><span class="default">$price </span><span class="keyword">= </span><span class="default">0.0</span><span class="keyword">;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// Rule 1 - protected.<br /><br />&nbsp; </span><span class="keyword">public function </span><span class="default">getLabel</span><span class="keyword">() {&nbsp; &nbsp; &nbsp;&nbsp; </span><span class="comment">// Rule 2 - public function.<br />&nbsp; &nbsp; </span><span class="keyword">return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">label</span><span class="keyword">;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; </span><span class="comment">// Rule 3 - string OUT for $label.<br />&nbsp; </span><span class="keyword">}<br /><br />&nbsp; public function </span><span class="default">getPrice</span><span class="keyword">() {&nbsp; &nbsp; &nbsp;&nbsp; </span><span class="comment">// Rule 2 - public function.&nbsp; &nbsp; <br />&nbsp; &nbsp; </span><span class="keyword">return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">price</span><span class="keyword">;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; </span><span class="comment">// Rule 4 - float OUT for $price.<br />&nbsp; </span><span class="keyword">}<br /><br />&nbsp; public function </span><span class="default">setLabel</span><span class="keyword">(</span><span class="default">$label</span><span class="keyword">)&nbsp;&nbsp; </span><span class="comment">// Rule 2 - public function.<br />&nbsp; </span><span class="keyword">{<br />&nbsp; &nbsp; </span><span class="comment">/**<br />&nbsp; &nbsp;&nbsp; * Make sure $label is a PHP string that can be used in a SORTING<br />&nbsp; &nbsp;&nbsp; * alogorithm, NOT a boolean, number, array, or object that can't<br />&nbsp; &nbsp;&nbsp; * properly sort -- AND to make sure that the getLabel() function<br />&nbsp; &nbsp;&nbsp; * ALWAYS returns a genuine PHP string.<br />&nbsp; &nbsp;&nbsp; *<br />&nbsp; &nbsp;&nbsp; * Using a RegExp would improve this function, however, the main<br />&nbsp; &nbsp;&nbsp; * point is the one made above.<br />&nbsp; &nbsp;&nbsp; */<br /><br />&nbsp; &nbsp; </span><span class="keyword">if(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$label</span><span class="keyword">))<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">label </span><span class="keyword">= (string)</span><span class="default">$label</span><span class="keyword">; </span><span class="comment">// Rule 3 - string IN for $label.<br />&nbsp; &nbsp; </span><span class="keyword">}<br />&nbsp; }<br /><br />&nbsp; public function </span><span class="default">setPrice</span><span class="keyword">(</span><span class="default">$price</span><span class="keyword">)&nbsp;&nbsp; </span><span class="comment">// Rule 2 - public function.<br />&nbsp; </span><span class="keyword">{<br />&nbsp; &nbsp; </span><span class="comment">/**<br />&nbsp; &nbsp;&nbsp; * Make sure $price is a PHP float so that it can be used in a<br />&nbsp; &nbsp;&nbsp; * NUMERICAL CALCULATION. Do not accept boolean, string, array or<br />&nbsp; &nbsp;&nbsp; * some other object that can't be included in a simple calculation.<br />&nbsp; &nbsp;&nbsp; * This will ensure that the getPrice() function ALWAYS returns an<br />&nbsp; &nbsp;&nbsp; * authentic, genuine, full-flavored PHP number and nothing but.<br />&nbsp; &nbsp;&nbsp; *<br />&nbsp; &nbsp;&nbsp; * Checking for positive values may improve this function,<br />&nbsp; &nbsp;&nbsp; * however, the main point is the one made above.<br />&nbsp; &nbsp;&nbsp; */<br /><br />&nbsp; &nbsp; </span><span class="keyword">if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$price</span><span class="keyword">))<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">price </span><span class="keyword">= (float)</span><span class="default">$price</span><span class="keyword">; </span><span class="comment">// Rule 4 - float IN for $price.<br />&nbsp; &nbsp; </span><span class="keyword">}<br />&nbsp; }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Now there is nothing OUTSIDE CODE can do to obscure the INSIDES of an Item. In other words, every instance of Item will always look and behave like any other Item complete with a label and a price, AND you can group them together and they will interact without disruption. Even though there is room for improvement, the basics are there, and PHP will not hassle you... which means you can keep your hair!</span>
</code></div>
  </div>
 </div>
  <div class="note" id="87413">  <div class="votes">
    <div id="Vu87413">
    <a href="/manual/vote-note.php?id=87413&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87413">
    <a href="/manual/vote-note.php?id=87413&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87413" title="75% like this...">
    124
    </div>
  </div>
  <a href="#87413" class="name">
  <strong class="user"><em>what at ever dot com</em></strong></a><a class="genanchor" href="#87413"> &para;</a><div class="date" title="2008-12-04 05:15"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom87413">
<div class="phpcode"><code><span class="html">
If you have problems with overriding private methods in extended classes, read this:)<br /><br />The manual says that "Private limits visibility only to the class that defines the item". That means extended children classes do not see the private methods of parent class and vice versa also. <br /><br />As a result, parents and children can have different implementations of the "same" private methods, depending on where you call them (e.g. parent or child class instance). Why? Because private methods are visible only for the class that defines them and the child class does not see the parent's private methods. If the child doesn't see the parent's private methods, the child can't override them. Scopes are different. In other words -- each class has a private set of private variables that no-one else has access to. <br /><br />A sample demonstrating the percularities of private methods when extending classes:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">base </span><span class="keyword">{<br />&nbsp; &nbsp; public function </span><span class="default">inherited</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">overridden</span><span class="keyword">();<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; private function </span><span class="default">overridden</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">'base'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br />class </span><span class="default">child </span><span class="keyword">extends </span><span class="default">base </span><span class="keyword">{<br />&nbsp; &nbsp; private function </span><span class="default">overridden</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">'child'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">child</span><span class="keyword">();<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">inherited</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Output will be "base".<br /><br />If you want the inherited methods to use overridden functionality in extended classes but public sounds too loose, use protected. That's what it is for:)<br /><br />A sample that works as intended:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">base </span><span class="keyword">{<br />&nbsp; &nbsp; public function </span><span class="default">inherited</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">overridden</span><span class="keyword">();<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; protected function </span><span class="default">overridden</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">'base'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br />class </span><span class="default">child </span><span class="keyword">extends </span><span class="default">base </span><span class="keyword">{<br />&nbsp; &nbsp; protected function </span><span class="default">overridden</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">'child'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">child</span><span class="keyword">();<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">inherited</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>Output will be "child".</span>
</code></div>
  </div>
 </div>
  <div class="note" id="117563">  <div class="votes">
    <div id="Vu117563">
    <a href="/manual/vote-note.php?id=117563&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117563">
    <a href="/manual/vote-note.php?id=117563&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117563" title="74% like this...">
    58
    </div>
  </div>
  <a href="#117563" class="name">
  <strong class="user"><em>pgl at yoyo dot org</em></strong></a><a class="genanchor" href="#117563"> &para;</a><div class="date" title="2015-06-30 11:09"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom117563">
<div class="phpcode"><code><span class="html">
Just a quick note that it's possible to declare visibility for multiple properties at the same time, by separating them by commas.<br /><br />eg:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">a<br /></span><span class="keyword">{<br />&nbsp; &nbsp; protected </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">;<br /><br />&nbsp; &nbsp; public </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">;<br /><br />&nbsp; &nbsp; private </span><span class="default">$e</span><span class="keyword">, </span><span class="default">$f</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="69104">  <div class="votes">
    <div id="Vu69104">
    <a href="/manual/vote-note.php?id=69104&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69104">
    <a href="/manual/vote-note.php?id=69104&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69104" title="65% like this...">
    31
    </div>
  </div>
  <a href="#69104" class="name">
  <strong class="user"><em>stephane at harobed dot org</em></strong></a><a class="genanchor" href="#69104"> &para;</a><div class="date" title="2006-08-23 02:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom69104">
<div class="phpcode"><code><span class="html">
A class A static public function can access to class A private function :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />&nbsp; &nbsp; private function </span><span class="default">foo</span><span class="keyword">()<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; print(</span><span class="string">"bar"</span><span class="keyword">);<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; static public function </span><span class="default">bar</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">();<br />&nbsp; &nbsp; }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /><br /></span><span class="default">A</span><span class="keyword">::</span><span class="default">bar</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />It's working.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="110555">  <div class="votes">
    <div id="Vu110555">
    <a href="/manual/vote-note.php?id=110555&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110555">
    <a href="/manual/vote-note.php?id=110555&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110555" title="63% like this...">
    12
    </div>
  </div>
  <a href="#110555" class="name">
  <strong class="user"><em>alexaulbach at mayflower dot de</em></strong></a><a class="genanchor" href="#110555"> &para;</a><div class="date" title="2012-11-06 01:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom110555">
<div class="phpcode"><code><span class="html">
<span class="default">&lt;?php<br /><br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL </span><span class="keyword">| </span><span class="default">E_STRICT </span><span class="keyword">|&nbsp; </span><span class="default">E_ERROR </span><span class="keyword">| </span><span class="default">E_WARNING </span><span class="keyword">| </span><span class="default">E_PARSE </span><span class="keyword">| </span><span class="default">E_COMPILE_ERROR</span><span class="keyword">);<br /><br />class </span><span class="default">A<br /></span><span class="keyword">{<br />&nbsp; &nbsp; &nbsp; &nbsp; private </span><span class="default">$private </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; public </span><span class="default">$public </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; function </span><span class="default">get</span><span class="keyword">()<br />&nbsp; &nbsp; &nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="string">"A: </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">private</span><span class="string"> , </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">public</span><span class="string">\n"</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br /><br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A<br /></span><span class="keyword">{<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; function </span><span class="default">__construct</span><span class="keyword">()<br />&nbsp; &nbsp; &nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">private </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">public </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; function </span><span class="default">set</span><span class="keyword">()<br />&nbsp; &nbsp; &nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">private </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">public </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; function </span><span class="default">get</span><span class="keyword">()<br />&nbsp; &nbsp; &nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">get</span><span class="keyword">() . </span><span class="string">"B: </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">private</span><span class="string"> , </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">public</span><span class="string">\n"</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br /><br />}<br /><br /></span><span class="default">$B </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br /><br />echo </span><span class="default">$B</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">();<br />echo </span><span class="default">$B</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">();<br />echo </span><span class="default">$B</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />?&gt;<br /><br />Result is<br />A: 1 , 2<br />B: 2 , 2<br />A: 1 , 3<br />B: 3 , 3<br /><br />This is correct code and does not warn you to use any private.<br /><br />"$this-&gt;private" is only in A private. If you write it in class B it's a runtime declaration of the public variable "$this-&gt;private", and PHP doesn't even warn you that you create a variable in a class without declaration, because this is normal behavior.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="60382">  <div class="votes">
    <div id="Vu60382">
    <a href="/manual/vote-note.php?id=60382&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60382">
    <a href="/manual/vote-note.php?id=60382&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60382" title="64% like this...">
    16
    </div>
  </div>
  <a href="#60382" class="name">
  <strong class="user"><em>r dot wilczek at web-appz dot de</em></strong></a><a class="genanchor" href="#60382"> &para;</a><div class="date" title="2006-01-05 05:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom60382">
<div class="phpcode"><code><span class="html">
Beware: Visibility works on a per-class-base and does not prevent instances of the same class accessing each others properties!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />&nbsp; &nbsp; private </span><span class="default">$bar</span><span class="keyword">;<br /><br />&nbsp; &nbsp; public function </span><span class="default">debugBar</span><span class="keyword">(</span><span class="default">Foo $object</span><span class="keyword">)<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// this does NOT violate visibility although $bar is private<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="keyword">echo </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; public function </span><span class="default">setBar</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// Neccessary method, for $bar is invisible outside the class<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bar </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public function </span><span class="default">setForeignBar</span><span class="keyword">(</span><span class="default">Foo $object</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// this does NOT violate visibility!<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">bar </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">setBar</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">setBar</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">debugBar</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// 2<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">debugBar</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// 1<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">setForeignBar</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">setForeignBar</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">debugBar</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// 3<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">debugBar</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// 4<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="93743">  <div class="votes">
    <div id="Vu93743">
    <a href="/manual/vote-note.php?id=93743&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93743">
    <a href="/manual/vote-note.php?id=93743&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93743" title="61% like this...">
    15
    </div>
  </div>
  <a href="#93743" class="name">
  <strong class="user"><em>Marce!</em></strong></a><a class="genanchor" href="#93743"> &para;</a><div class="date" title="2009-09-25 03:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom93743">
<div class="phpcode"><code><span class="html">
Please note that protected methods are also available from sibling classes as long as the method is declared in the common parent. This may also be an abstract method.<br /> <br />In the below example Bar knows about the existence of _test() in Foo because they inherited this method from the same parent. It does not matter that it was abstract in the parent.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">Base </span><span class="keyword">{<br />&nbsp; &nbsp; abstract protected function </span><span class="default">_test</span><span class="keyword">();<br />}<br /> <br />class </span><span class="default">Bar </span><span class="keyword">extends </span><span class="default">Base </span><span class="keyword">{<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; protected function </span><span class="default">_test</span><span class="keyword">() { }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public function </span><span class="default">TestFoo</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$c </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">_test</span><span class="keyword">();<br />&nbsp; &nbsp; }<br />}<br /> <br />class </span><span class="default">Foo </span><span class="keyword">extends </span><span class="default">Base </span><span class="keyword">{<br />&nbsp; &nbsp; protected function </span><span class="default">_test</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">'Foo'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /> <br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();<br /></span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">TestFoo</span><span class="keyword">(); </span><span class="comment">// result: Foo<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="92995">  <div class="votes">
    <div id="Vu92995">
    <a href="/manual/vote-note.php?id=92995&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92995">
    <a href="/manual/vote-note.php?id=92995&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92995" title="60% like this...">
    8
    </div>
  </div>
  <a href="#92995" class="name">
  <strong class="user"><em>imran at phptrack dot com</em></strong></a><a class="genanchor" href="#92995"> &para;</a><div class="date" title="2009-08-18 02:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom92995">
<div class="phpcode"><code><span class="html">
Some Method Overriding rules :<br /><br />1. In the overriding, the method names and arguments (arg’s) must be same.<br /><br />Example:<br />class p { public function getName(){} }<br />class c extends P{ public function getName(){} }<br /><br />2. final methods can’t be overridden.<br /><br />3. private methods never participate in the in the overriding because these methods are not visible in the child classes.<br /><br />Example:<br />class a {<br />private&nbsp; function my(){&nbsp; &nbsp; <br />&nbsp; &nbsp; print "parent:my";<br />}<br />public function getmy(){<br />$this-&gt;my();<br />}<br />}<br />class b extends a{<br />&nbsp; &nbsp; private&nbsp; function my(){<br />&nbsp; &nbsp; &nbsp; &nbsp; print "base:my";&nbsp; &nbsp; &nbsp; &nbsp; <br />}<br />}<br />$x = new b();<br />$x-&gt;getmy(); // parent:my<br /><br />4. While overriding decreasing access specifier is not allowed<br /><br />class a {<br />public&nbsp; function my(){&nbsp; &nbsp; <br />&nbsp; &nbsp; print "parent:my";<br />}<br /><br />}<br />class b extends a{<br />&nbsp; &nbsp; private&nbsp; function my(){<br />&nbsp; &nbsp; &nbsp; &nbsp; print "base:my";&nbsp; &nbsp; &nbsp; &nbsp; <br />}<br />}<br />//Fatal error:&nbsp; Access level to b::my() must be public (as in class a)</span>
</code></div>
  </div>
 </div>
  <div class="note" id="123687">  <div class="votes">
    <div id="Vu123687">
    <a href="/manual/vote-note.php?id=123687&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123687">
    <a href="/manual/vote-note.php?id=123687&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123687" title="58% like this...">
    3
    </div>
  </div>
  <a href="#123687" class="name">
  <strong class="user"><em>tushar dot khan0122 at gmail dot com</em></strong></a><a class="genanchor" href="#123687"> &para;</a><div class="date" title="2019-03-12 07:54"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom123687">
<div class="phpcode"><code><span class="html">
1 . If the class member declared as public then it can be accessed everywhere.<br />2 . If the class members declared as protected then it can be accessed only within the class itself and by inheriting and parent classes.<br /> 3 .If the class members declared as private then it may only be accessed by the class that defines the member.<br /><br /><span class="default">&lt;?php <br />&nbsp; <br /></span><span class="comment">// BaseClass <br /></span><span class="keyword">class </span><span class="default">pub </span><span class="keyword">{ <br />&nbsp; &nbsp; public </span><span class="default">$tag_line </span><span class="keyword">= </span><span class="string">"A Computer Science Portal for Geeks!"</span><span class="keyword">; <br />&nbsp; &nbsp; function </span><span class="default">display</span><span class="keyword">() { <br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">tag_line</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">; <br />&nbsp; &nbsp; } <br />} <br />&nbsp; <br /></span><span class="comment">// SubClass <br /></span><span class="keyword">class </span><span class="default">child </span><span class="keyword">extends </span><span class="default">pub </span><span class="keyword">{ <br />&nbsp; &nbsp; function </span><span class="default">show</span><span class="keyword">(){ <br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">tag_line</span><span class="keyword">; <br />&nbsp; &nbsp; } <br />}&nbsp; <br />&nbsp; <br /></span><span class="comment">// Object Declaration <br /></span><span class="default">$obj</span><span class="keyword">= new </span><span class="default">child</span><span class="keyword">; <br />&nbsp; <br /></span><span class="comment">// A Computer Science Portal for Geeks! <br /></span><span class="keyword">echo </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">tag_line</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;&nbsp; <br />&nbsp; <br /></span><span class="comment">// A Computer Science Portal for Geeks! <br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">display</span><span class="keyword">();&nbsp; <br />&nbsp; <br /></span><span class="comment">// A Computer Science Portal for Geeks! <br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">show</span><span class="keyword">();&nbsp; <br /></span><span class="default">?&gt;</span> <br /><br /><span class="default">&lt;?php <br />&nbsp; <br /></span><span class="comment">// Base Class <br /></span><span class="keyword">class </span><span class="default">pro </span><span class="keyword">{ <br />&nbsp; &nbsp; protected </span><span class="default">$x </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">; <br />&nbsp; &nbsp; protected </span><span class="default">$y </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">; <br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br />&nbsp; &nbsp; </span><span class="comment">// Subtraction Function <br />&nbsp; &nbsp; </span><span class="keyword">function </span><span class="default">sub</span><span class="keyword">()&nbsp; <br />&nbsp; &nbsp; { <br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$sum</span><span class="keyword">=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="keyword">-</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y </span><span class="keyword">. </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">; <br />&nbsp; &nbsp; }&nbsp; &nbsp; &nbsp; <br />}&nbsp; <br />&nbsp; <br /></span><span class="comment">// SubClass - Inherited Class <br /></span><span class="keyword">class </span><span class="default">child </span><span class="keyword">extends </span><span class="default">pro </span><span class="keyword">{ <br />&nbsp; &nbsp; function </span><span class="default">mul</span><span class="keyword">() </span><span class="comment">//Multiply Function <br />&nbsp; &nbsp; </span><span class="keyword">{ <br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$sub</span><span class="keyword">=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="keyword">*</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y</span><span class="keyword">; <br />&nbsp; &nbsp; } <br />}&nbsp; <br />&nbsp; <br /></span><span class="default">$obj</span><span class="keyword">= new </span><span class="default">child</span><span class="keyword">; <br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">sub</span><span class="keyword">(); <br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">mul</span><span class="keyword">(); <br /></span><span class="default">?&gt;</span> <br /><br /><span class="default">&lt;?php <br />&nbsp; <br /></span><span class="comment">// Base Class <br /></span><span class="keyword">class </span><span class="default">demo </span><span class="keyword">{ <br />&nbsp; &nbsp; private </span><span class="default">$name</span><span class="keyword">=</span><span class="string">"A Computer Science Portal for Geeks!"</span><span class="keyword">; <br />&nbsp; &nbsp; &nbsp; <br />&nbsp; &nbsp; private function </span><span class="default">show</span><span class="keyword">() <br />&nbsp; &nbsp; { <br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">"This is private method of base class"</span><span class="keyword">; <br />&nbsp; &nbsp; } <br />}&nbsp; <br />&nbsp; <br /></span><span class="comment">// Sub Class <br /></span><span class="keyword">class </span><span class="default">child </span><span class="keyword">extends </span><span class="default">demo </span><span class="keyword">{ <br />&nbsp; &nbsp; function </span><span class="default">display</span><span class="keyword">() <br />&nbsp; &nbsp; { <br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">; <br />&nbsp; &nbsp; } <br />}&nbsp; <br />&nbsp; <br /></span><span class="comment">// Object Declaration <br /></span><span class="default">$obj</span><span class="keyword">= new </span><span class="default">child</span><span class="keyword">; <br />&nbsp; <br /></span><span class="comment">// Uncaught Error: Call to private method demo::show() <br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">show</span><span class="keyword">();&nbsp; <br />&nbsp; <br /></span><span class="comment">//Undefined property: child::$name <br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">display</span><span class="keyword">();&nbsp; <br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="108852">  <div class="votes">
    <div id="Vu108852">
    <a href="/manual/vote-note.php?id=108852&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108852">
    <a href="/manual/vote-note.php?id=108852&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108852" title="58% like this...">
    9
    </div>
  </div>
  <a href="#108852" class="name">
  <strong class="user"><em>IgelHaut</em></strong></a><a class="genanchor" href="#108852"> &para;</a><div class="date" title="2012-05-30 01:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom108852">
<div class="phpcode"><code><span class="html">
<span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">test </span><span class="keyword">{<br />&nbsp; &nbsp; public </span><span class="default">$public </span><span class="keyword">= </span><span class="string">'Public var'</span><span class="keyword">;<br />&nbsp; &nbsp; protected </span><span class="default">$protected </span><span class="keyword">= </span><span class="string">'protected var'</span><span class="keyword">;<br />&nbsp; &nbsp; private </span><span class="default">$private </span><span class="keyword">= </span><span class="string">'Private var'</span><span class="keyword">;<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public static </span><span class="default">$static_public </span><span class="keyword">= </span><span class="string">'Public static var'</span><span class="keyword">;<br />&nbsp; &nbsp; protected static </span><span class="default">$static_protected </span><span class="keyword">= </span><span class="string">'protected static var'</span><span class="keyword">;<br />&nbsp; &nbsp; private static </span><span class="default">$static_private </span><span class="keyword">= </span><span class="string">'Private static var'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$class </span><span class="keyword">= new </span><span class="default">test</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The code prints<br />test Object ( [public] =&gt; Public var [protected:protected] =&gt; protected var [private:test:private] =&gt; Private var )<br /><br />Functions like print_r(), var_dump() and var_export() prints public, protected and private variables, but not the static variables.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="109324">  <div class="votes">
    <div id="Vu109324">
    <a href="/manual/vote-note.php?id=109324&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109324">
    <a href="/manual/vote-note.php?id=109324&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109324" title="58% like this...">
    11
    </div>
  </div>
  <a href="#109324" class="name">
  <strong class="user"><em>omega at 2093 dot es</em></strong></a><a class="genanchor" href="#109324"> &para;</a><div class="date" title="2012-07-06 12:04"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom109324">
<div class="phpcode"><code><span class="html">
This has already been noted here, but there was no clear example. Methods defined in a parent class can NOT access private methods defined in a class which inherits from them. They can access protected, though.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">ParentClass </span><span class="keyword">{<br /><br />&nbsp; &nbsp; public function </span><span class="default">execute</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">();<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />}<br /><br />class </span><span class="default">ChildClass </span><span class="keyword">extends </span><span class="default">ParentClass </span><span class="keyword">{<br /><br />&nbsp; &nbsp; private function </span><span class="default">privateMethod</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">"hi, i'm private"</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; protected function </span><span class="default">protectedMethod</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">"hi, i'm protected"</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />}<br /><br /></span><span class="default">$object </span><span class="keyword">= new </span><span class="default">ChildClass</span><span class="keyword">();<br /><br /></span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="string">'protectedMethod'</span><span class="keyword">);<br /><br /></span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="string">'privateMethod'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />hi, i'm protected<br />Fatal error: Call to private method ChildClass::privateMethod() from context 'ParentClass' in index.php on line 6<br /><br />In an early approach this may seem unwanted behaviour but it actually makes sense. Private can only be accessed by the class which defines, neither parent nor children classes.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="109110">  <div class="votes">
    <div id="Vu109110">
    <a href="/manual/vote-note.php?id=109110&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109110">
    <a href="/manual/vote-note.php?id=109110&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109110" title="58% like this...">
    7
    </div>
  </div>
  <a href="#109110" class="name">
  <strong class="user"><em>jc dot flash at gmail dot com</em></strong></a><a class="genanchor" href="#109110"> &para;</a><div class="date" title="2012-06-21 02:31"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom109110">
<div class="phpcode"><code><span class="html">
if not overwritten, self::$foo in a subclass actually refers to parent's self::$foo <br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">one<br /></span><span class="keyword">{<br />&nbsp; &nbsp; protected static </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">"bar"</span><span class="keyword">;<br />&nbsp; &nbsp; public function </span><span class="default">change_foo</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">self</span><span class="keyword">::</span><span class="default">$foo </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br />class </span><span class="default">two </span><span class="keyword">extends </span><span class="default">one<br /></span><span class="keyword">{<br />&nbsp; &nbsp; public function </span><span class="default">tell_me</span><span class="keyword">()<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">$foo</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /></span><span class="default">$first </span><span class="keyword">= new </span><span class="default">one</span><span class="keyword">;<br /></span><span class="default">$second </span><span class="keyword">= new </span><span class="default">two</span><span class="keyword">;<br /><br /></span><span class="default">$second</span><span class="keyword">-&gt;</span><span class="default">tell_me</span><span class="keyword">(); </span><span class="comment">// bar<br /></span><span class="default">$first</span><span class="keyword">-&gt;</span><span class="default">change_foo</span><span class="keyword">(</span><span class="string">"restaurant"</span><span class="keyword">);<br /></span><span class="default">$second</span><span class="keyword">-&gt;</span><span class="default">tell_me</span><span class="keyword">(); </span><span class="comment">// restaurant<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="120150">  <div class="votes">
    <div id="Vu120150">
    <a href="/manual/vote-note.php?id=120150&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120150">
    <a href="/manual/vote-note.php?id=120150&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120150" title="55% like this...">
    3
    </div>
  </div>
  <a href="#120150" class="name">
  <strong class="user"><em>bishop at php dot net</em></strong></a><a class="genanchor" href="#120150"> &para;</a><div class="date" title="2016-11-11 03:27"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom120150">
<div class="phpcode"><code><span class="html">
&gt; Members declared protected can be accessed only within <br />&gt; the class itself and by inherited classes. Members declared <br />&gt; as private may only be accessed by the class that defines <br />&gt; the member.<br /><br />This is not strictly true. Code outside the object can get and set private and protected members:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Sealed </span><span class="keyword">{ private </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">; }<br /><br /></span><span class="default">$sealed </span><span class="keyword">= new </span><span class="default">Sealed</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">); </span><span class="comment">// private $value =&gt; string(3) "foo"<br /><br /></span><span class="default">call_user_func</span><span class="keyword">(\</span><span class="default">Closure</span><span class="keyword">::</span><span class="default">bind</span><span class="keyword">(<br />&nbsp; &nbsp; function () use (</span><span class="default">$sealed</span><span class="keyword">) { </span><span class="default">$sealed</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="string">'BAZ'</span><span class="keyword">; },<br />&nbsp; &nbsp; </span><span class="default">null</span><span class="keyword">,<br />&nbsp; &nbsp; </span><span class="default">$sealed<br /></span><span class="keyword">));<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">); </span><span class="comment">// private $value =&gt; string(3) "BAZ"<br /><br /></span><span class="default">?&gt;<br /></span><br />The magic lay in \Closure::bind, which allows an anonymous function to bind to a particular class scope. The documentation on \Closure::bind says:<br /><br />&gt; If an object is given, the type of the object will be used<br />&gt; instead. This determines the visibility of protected and<br />&gt; private methods of the bound object.<br /><br />So, effectively, we're adding a run-time setter to $sealed, then calling that setter. This can be elaborated to generic functions that can force set and force get object members:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">force_set</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />&nbsp; &nbsp; </span><span class="default">call_user_func</span><span class="keyword">(\</span><span class="default">Closure</span><span class="keyword">::</span><span class="default">bind</span><span class="keyword">(<br />&nbsp; &nbsp; &nbsp; &nbsp; function () use (</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$object</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">} = </span><span class="default">$value</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; },<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">null</span><span class="keyword">,<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$object<br />&nbsp; &nbsp; </span><span class="keyword">));<br />}<br /><br />function </span><span class="default">force_get</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">) {<br />&nbsp; &nbsp; return </span><span class="default">call_user_func</span><span class="keyword">(\</span><span class="default">Closure</span><span class="keyword">::</span><span class="default">bind</span><span class="keyword">(<br />&nbsp; &nbsp; &nbsp; &nbsp; function () use (</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">$object</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">};<br />&nbsp; &nbsp; &nbsp; &nbsp; },<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">null</span><span class="keyword">,<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$object<br />&nbsp; &nbsp; </span><span class="keyword">));<br />}<br /><br /></span><span class="default">force_set</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">, </span><span class="string">'value'</span><span class="keyword">, </span><span class="string">'quux'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">force_get</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">, </span><span class="string">'value'</span><span class="keyword">)); </span><span class="comment">// 'quux'<br /><br /></span><span class="default">?&gt;<br /></span><br />You should probably not rely on this ability for production quality code, but having this ability for debugging and testing is handy.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="75426">  <div class="votes">
    <div id="Vu75426">
    <a href="/manual/vote-note.php?id=75426&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75426">
    <a href="/manual/vote-note.php?id=75426&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75426" title="55% like this...">
    3
    </div>
  </div>
  <a href="#75426" class="name">
  <strong class="user"><em>Joshua Watt</em></strong></a><a class="genanchor" href="#75426"> &para;</a><div class="date" title="2007-05-29 12:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom75426">
<div class="phpcode"><code><span class="html">
I couldn't find this documented anywhere, but you can access protected and private member varaibles in different instance of the same class, just as you would expect<br /><br />i.e.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />&nbsp; &nbsp; protected </span><span class="default">$prot</span><span class="keyword">;<br />&nbsp; &nbsp; private </span><span class="default">$priv</span><span class="keyword">;<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prot </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">priv </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public function </span><span class="default">print_other</span><span class="keyword">(</span><span class="default">A $other</span><span class="keyword">)<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$other</span><span class="keyword">-&gt;</span><span class="default">prot</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$other</span><span class="keyword">-&gt;</span><span class="default">priv</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A<br /></span><span class="keyword">{<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">(</span><span class="string">"a_protected"</span><span class="keyword">, </span><span class="string">"a_private"</span><span class="keyword">);<br /></span><span class="default">$other_a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">(</span><span class="string">"other_a_protected"</span><span class="keyword">, </span><span class="string">"other_a_private"</span><span class="keyword">);<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">(</span><span class="string">"b_protected"</span><span class="keyword">, </span><span class="string">"ba_private"</span><span class="keyword">);<br /><br /></span><span class="default">$other_a</span><span class="keyword">-&gt;</span><span class="default">print_other</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">//echoes a_protected and a_private<br /></span><span class="default">$other_a</span><span class="keyword">-&gt;</span><span class="default">print_other</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">); </span><span class="comment">//echoes b_protected and ba_private<br /><br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">print_other</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">//echoes a_protected and a_private<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="126362">  <div class="votes">
    <div id="Vu126362">
    <a href="/manual/vote-note.php?id=126362&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126362">
    <a href="/manual/vote-note.php?id=126362&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126362" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126362" class="name">
  <strong class="user"><em>kostya at eltexsoft dot com</em></strong></a><a class="genanchor" href="#126362"> &para;</a><div class="date" title="2021-08-23 10:05"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom126362">
<div class="phpcode"><code><span class="html">
I see we can redeclare private properties into child class <br /><span class="default">&lt;?php&nbsp;&nbsp; <br /> </span><span class="keyword">class </span><span class="default">A</span><span class="keyword">{<br />&nbsp; &nbsp; &nbsp; &nbsp; private </span><span class="default">int $private_prop </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; protected </span><span class="default">int $protected_prop </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A</span><span class="keyword">{<br />&nbsp; &nbsp; &nbsp; &nbsp; private </span><span class="default">int $private_prop </span><span class="keyword">= </span><span class="default">7</span><span class="keyword">; </span><span class="comment">// we can redeclare private property!!!<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="keyword">public function </span><span class="default">printAll</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">private_prop</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">protected_prop</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; </span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br />&nbsp; &nbsp; </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">printAll</span><span class="keyword">(); </span><span class="comment">// show 78<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="124884">  <div class="votes">
    <div id="Vu124884">
    <a href="/manual/vote-note.php?id=124884&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124884">
    <a href="/manual/vote-note.php?id=124884&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124884" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#124884" class="name">
  <strong class="user"><em>Vytautas</em></strong></a><a class="genanchor" href="#124884"> &para;</a><div class="date" title="2020-04-05 10:31"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom124884">
<div class="phpcode"><code><span class="html">
I have simplified the last method (Example #4) showing how to call private function outside the class. I think this is an idea of that example: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Test<br /></span><span class="keyword">{<br />&nbsp; &nbsp; private </span><span class="default">$foo</span><span class="keyword">;<br /><br />&nbsp; &nbsp; private function </span><span class="default">bar</span><span class="keyword">()<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">'Accessed the private method.'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; public function </span><span class="default">baz</span><span class="keyword">()<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// Calling the private method:<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">();<br />&nbsp; &nbsp; }<br />}<br /></span><span class="default">$test</span><span class="keyword">=new </span><span class="default">Test</span><span class="keyword">();<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">baz</span><span class="keyword">();<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">();<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="110891">  <div class="votes">
    <div id="Vu110891">
    <a href="/manual/vote-note.php?id=110891&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110891">
    <a href="/manual/vote-note.php?id=110891&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110891" title="40% like this...">
    -8
    </div>
  </div>
  <a href="#110891" class="name">
  <strong class="user"><em>andrei at leapingbytes dot net</em></strong></a><a class="genanchor" href="#110891"> &para;</a><div class="date" title="2012-12-20 09:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom110891">
<div class="phpcode"><code><span class="html">
Interestingly enough, PHP does very reasonable job in regards to interaction between classes and plain functions (even ones defined in the same file as the class)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">{<br />&nbsp; &nbsp; private function </span><span class="default">foo</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">"Foo" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; protected function </span><span class="default">bar</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">"bar" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; static function </span><span class="default">foobar</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">(); </span><span class="comment">// works<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">(); </span><span class="comment">// works<br />&nbsp; &nbsp; </span><span class="keyword">}&nbsp; &nbsp; <br />}<br /><br />function </span><span class="default">simple_function</span><span class="keyword">() {<br />&nbsp; &nbsp; </span><span class="default">$test </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">();<br /><br />&nbsp; &nbsp; </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">(); </span><span class="comment">// does not work<br /><br />&nbsp; &nbsp; </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">(); </span><span class="comment">// does not work<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; </span><span class="default">Test</span><span class="keyword">::</span><span class="default">foobar</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">); </span><span class="comment">// works<br /></span><span class="keyword">}<br /><br /></span><span class="default">simple_function</span><span class="keyword">();<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="113752">  <div class="votes">
    <div id="Vu113752">
    <a href="/manual/vote-note.php?id=113752&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113752">
    <a href="/manual/vote-note.php?id=113752&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113752" title="39% like this...">
    -8
    </div>
  </div>
  <a href="#113752" class="name">
  <strong class="user"><em>thcdesigning at gmail dot com</em></strong></a><a class="genanchor" href="#113752"> &para;</a><div class="date" title="2013-11-26 12:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom113752">
<div class="phpcode"><code><span class="html">
Private or not private?<br /> I get baffled whenever I see this kind of an example.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">vessel</span><span class="keyword">{<br />&nbsp; &nbsp; private </span><span class="default">$things </span><span class="keyword">= array();<br />&nbsp; &nbsp;&nbsp; <br />&nbsp; &nbsp; public function </span><span class="default">setThing</span><span class="keyword">(</span><span class="default">$things</span><span class="keyword">){<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">things </span><span class="keyword">= </span><span class="default">$things</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; public function </span><span class="default">getThing</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">){<br />&nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">things</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br />class </span><span class="default">smallVessel</span><span class="keyword">{<br />&nbsp; &nbsp; private </span><span class="default">$things </span><span class="keyword">= array();<br />&nbsp; &nbsp;&nbsp; <br />&nbsp; &nbsp; public function </span><span class="default">setThing</span><span class="keyword">(</span><span class="default">$things</span><span class="keyword">){<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">things </span><span class="keyword">= </span><span class="default">$things</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; public function </span><span class="default">getThing</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">){<br />&nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">things</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br /></span><span class="default">$basket </span><span class="keyword">= new </span><span class="default">vessel</span><span class="keyword">();<br /></span><span class="default">$bucket </span><span class="keyword">= new </span><span class="default">vessel</span><span class="keyword">();<br /></span><span class="default">$bowl </span><span class="keyword">= new </span><span class="default">smallVessel</span><span class="keyword">();<br /><br /></span><span class="default">$basket</span><span class="keyword">-&gt;</span><span class="default">setThing</span><span class="keyword">(array(</span><span class="string">'wine' </span><span class="keyword">, </span><span class="string">'water' </span><span class="keyword">, </span><span class="string">'sugar'</span><span class="keyword">));<br /><br /> </span><span class="comment">// returns the contents inside basket unexpectedly<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$bucket</span><span class="keyword">-&gt;</span><span class="default">getThing</span><span class="keyword">(</span><span class="default">$basket</span><span class="keyword">));<br /><br /></span><span class="comment">// returns error, quite rightly so!<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$bowl </span><span class="keyword">-&gt;</span><span class="default">getThing</span><span class="keyword">(</span><span class="default">$basket</span><span class="keyword">));</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="112768">  <div class="votes">
    <div id="Vu112768">
    <a href="/manual/vote-note.php?id=112768&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112768">
    <a href="/manual/vote-note.php?id=112768&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112768" title="39% like this...">
    -7
    </div>
  </div>
  <a href="#112768" class="name">
  <strong class="user"><em>aluciffer at hotmail dot com</em></strong></a><a class="genanchor" href="#112768"> &para;</a><div class="date" title="2013-07-21 02:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom112768">
<div class="phpcode"><code><span class="html">
As far as it regards the properties of objects, visibility is, yes, as the examples show.<br />Private, protected methods are not accessible via syntax $a-&gt;protectedVar, however their values are still (php 5.3.26) accessible through a number of other methods (serializing, converting to array, and nevertheless using the ReflectionClass methods).<br />As it was pointed out and such as in the example below:<br /><span class="default">&lt;?php<br /> <br /></span><span class="keyword">echo </span><span class="string">"PHP Version: "</span><span class="keyword">.</span><span class="default">phpversion</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br /> <br />class </span><span class="default">Foo <br /></span><span class="keyword">{<br />&nbsp;&nbsp; private&nbsp;&nbsp; </span><span class="default">$bar&nbsp; </span><span class="keyword">= </span><span class="string">"value of private var"</span><span class="keyword">;<br />&nbsp;&nbsp; protected </span><span class="default">$bar2 </span><span class="keyword">= </span><span class="string">"value of protected var"</span><span class="keyword">;<br />&nbsp;&nbsp; public&nbsp; &nbsp; </span><span class="default">$bar3 </span><span class="keyword">= </span><span class="string">"value of public var"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;<br /><br />echo </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">((array)</span><span class="default">$obj</span><span class="keyword">);<br /><br />echo (</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">bar3</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />echo (</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">bar2</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />echo (</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />It will output:<br /><br />PHP Version: 5.3.26<br />O:3:"Foo":3:{s:8:"Foobar";s:20:"value of private var ";s:7:"*bar2";s:22:"value of protected var";s:4:"bar3";s:19:"value of public var";}<br />Foo Object <br />(<br />&nbsp; &nbsp; [bar:Foo:private] =&gt; value of private var<br />&nbsp; &nbsp; [bar2:protected] =&gt; value of protected var<br />&nbsp; &nbsp; [bar3] =&gt; value of public var<br />)<br /><br />Array<br />(<br />&nbsp; &nbsp; [Foobar] =&gt; value of private var<br />&nbsp; &nbsp; [*bar2] =&gt; value of protected var<br />&nbsp; &nbsp; [bar3] =&gt; value of public var<br />)<br />value of public var<br /><br />While the last two lines, accessing directly the private and protected object properties (bar2 and bar), will throw out fatal errors like:<br />PHP Fatal error:&nbsp; Cannot access private property Foo::$bar <br />and<br />PHP Fatal error:&nbsp; Cannot access protected property Foo::$bar2</span>
</code></div>
  </div>
 </div>
  <div class="note" id="125372">  <div class="votes">
    <div id="Vu125372">
    <a href="/manual/vote-note.php?id=125372&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125372">
    <a href="/manual/vote-note.php?id=125372&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125372" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#125372" class="name">
  <strong class="user"><em>tvitcom at yandex dot ru</em></strong></a><a class="genanchor" href="#125372"> &para;</a><div class="date" title="2020-09-16 04:49"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom125372">
<div class="phpcode"><code><span class="html">
<span class="default">&lt;?php<br /></span><span class="comment">//PHP Version 7.4.5 (compiled, as mod_cgi)<br /><br /></span><span class="keyword">class </span><span class="default">BaseOne </span><span class="keyword">{<br />&nbsp; &nbsp; public function Print(</span><span class="default">$a</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">$a </span><span class="keyword">. </span><span class="string">'123'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; private function </span><span class="default">PrintPrivate</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">$a </span><span class="keyword">. </span><span class="string">'123'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; protected function </span><span class="default">PrintProtected</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">$a </span><span class="keyword">. </span><span class="string">'123'</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br />class </span><span class="default">BaseTwo </span><span class="keyword">extends </span><span class="default">BaseOne </span><span class="keyword">{}<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">BaseTwo</span><span class="keyword">();<br /><br />echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">Print</span><span class="keyword">(</span><span class="string">'000'</span><span class="keyword">);<br />echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">PrintPrivate</span><span class="keyword">(</span><span class="string">"000"</span><span class="keyword">);</span><span class="comment">//Fatal error: Uncaught Error: Call to private method BaseOne::PrintPrivate() from context...<br /></span><span class="keyword">echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">PrintProtected</span><span class="keyword">(</span><span class="string">"000"</span><span class="keyword">);</span><span class="comment">//Fatal error: Uncaught Error: Call to protected method BaseOne::PrintProtected() from context...</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="124366">  <div class="votes">
    <div id="Vu124366">
    <a href="/manual/vote-note.php?id=124366&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124366">
    <a href="/manual/vote-note.php?id=124366&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124366" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#124366" class="name">
  <strong class="user"><em>Patanjali</em></strong></a><a class="genanchor" href="#124366"> &para;</a><div class="date" title="2019-11-04 10:19"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom124366">
<div class="phpcode"><code><span class="html">
Re: wbcarts at juno dot com<br /><br />Expected, since it comes down to PHP's lack of type enforcement.<br /><br />Classes preserve structure, but doesn't natively enforce scalar property types, as per PHP's variables.<br /><br />'It REQUIRES OUTSIDE CODE to do all the work...'<br /><br />No, as you indicate, to mitigate this,&nbsp; make variables private and use protected/public 'set' and 'get' types of methods to manipulate their values.<br /><br />However, the 'set' functions would also need to enforce type and report errors if not of the correct type.<br /><br />Of course, the code that uses classes should be designed to either:<br />a. Provide only the correct types of values.<br />b. Handle the errors reported.<br />c. Encapsulate use of the class with try-catch blocks.<br /><br />Note that c. is what sloppy code feeding mistyped values to the class would have to do if type were strictly enforced.<br /><br />Fortunately, as of 7.0, type can be specified for scalar function/method parameters, but would need try-catch blocks to handle mismatches from inside the class, rather than using the 'is' functions.<br /><br />All of this is part of proper design and defensive programming.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="104843">  <div class="votes">
    <div id="Vu104843">
    <a href="/manual/vote-note.php?id=104843&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104843">
    <a href="/manual/vote-note.php?id=104843&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104843" title="34% like this...">
    -8
    </div>
  </div>
  <a href="#104843" class="name">
  <strong class="user"><em>php at stage-slash-solutions dot com</em></strong></a><a class="genanchor" href="#104843"> &para;</a><div class="date" title="2011-07-10 03:21"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom104843">
<div class="phpcode"><code><span class="html">
access a protected property:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//Some library I am not allowed to change:<br /><br /></span><span class="keyword">abstract class </span><span class="default">a<br /></span><span class="keyword">{<br />&nbsp; protected </span><span class="default">$foo</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">aa </span><span class="keyword">extends </span><span class="default">a<br /></span><span class="keyword">{<br />&nbsp; function </span><span class="default">setFoo</span><span class="keyword">(</span><span class="default">$afoo</span><span class="keyword">)<br />&nbsp; {<br />&nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$afoo</span><span class="keyword">;<br />&nbsp; }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />if you get an instance of aa and need access to $foo:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a<br /></span><span class="keyword">{<br />&nbsp; function </span><span class="default">getFoo</span><span class="keyword">(</span><span class="default">$ainstance</span><span class="keyword">)<br />&nbsp; {<br />&nbsp; &nbsp; &nbsp; return </span><span class="default">$ainstance</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">;<br />&nbsp; }<br />}<br /><br /></span><span class="default">$aainstance</span><span class="keyword">=</span><span class="default">someexternalfunction</span><span class="keyword">();<br /></span><span class="default">$binstance</span><span class="keyword">=new </span><span class="default">b</span><span class="keyword">;<br /></span><span class="default">$aafoo</span><span class="keyword">=</span><span class="default">$binstance</span><span class="keyword">-&gt;</span><span class="default">getFoo</span><span class="keyword">(</span><span class="default">$aainstance</span><span class="keyword">);<br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div>
  <div class="note" id="91850">  <div class="votes">
    <div id="Vu91850">
    <a href="/manual/vote-note.php?id=91850&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91850">
    <a href="/manual/vote-note.php?id=91850&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91850" title="32% like this...">
    -16
    </div>
  </div>
  <a href="#91850" class="name">
  <strong class="user"><em>a dot schaffhirt at sedna-soft dot de</em></strong></a><a class="genanchor" href="#91850"> &para;</a><div class="date" title="2009-06-29 12:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom91850">
<div class="phpcode"><code><span class="html">
If you miss the "package" keyword in PHP in order to allow access between certain classes without their members being public, you can utilize the fact, that in PHP the protected keyword allows access to both subclasses and superclasses.<br /><br />So you can use this simple pattern:<br /><br /><span class="default">&lt;?php<br />&nbsp; &nbsp; </span><span class="keyword">abstract class </span><span class="default">Dispatcher </span><span class="keyword">{<br />&nbsp; &nbsp; &nbsp; &nbsp; protected function &amp;</span><span class="default">accessProperty </span><span class="keyword">(</span><span class="default">self $pObj</span><span class="keyword">, </span><span class="default">$pName</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">$pObj</span><span class="keyword">-&gt;</span><span class="default">$pName</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br />&nbsp; &nbsp; &nbsp; &nbsp; protected function </span><span class="default">invokeMethod </span><span class="keyword">(</span><span class="default">$pObj</span><span class="keyword">, </span><span class="default">$pName</span><span class="keyword">, </span><span class="default">$pArgs</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$pObj</span><span class="keyword">, </span><span class="default">$pName</span><span class="keyword">), </span><span class="default">$pArgs</span><span class="keyword">);<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br />&nbsp; &nbsp; }<br /></span><span class="default">?&gt;<br /></span><br />The classes that should be privileged to each other simply extend this dispatcher:<br /><br /><span class="default">&lt;?php<br />&nbsp; &nbsp; </span><span class="keyword">class </span><span class="default">Person </span><span class="keyword">extends </span><span class="default">Dispatcher </span><span class="keyword">{<br />&nbsp; &nbsp; &nbsp; &nbsp; private </span><span class="default">$name</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; protected </span><span class="default">$phoneNumbers</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; <br />&nbsp; &nbsp; &nbsp; &nbsp; public function </span><span class="default">__construct </span><span class="keyword">(</span><span class="default">$pName</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$pName</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">phoneNumbers </span><span class="keyword">= array();<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br />&nbsp; &nbsp; &nbsp; &nbsp; public function </span><span class="default">addNumber </span><span class="keyword">(</span><span class="default">PhoneNumber $pNumber</span><span class="keyword">, </span><span class="default">$pLabel</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">phoneNumbers</span><span class="keyword">[</span><span class="default">$pLabel</span><span class="keyword">] = </span><span class="default">$pNumber</span><span class="keyword">;<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// this does not work, because "owner" is protected:<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // $pNumber-&gt;owner = $this;<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // instead, we get a reference from the dispatcher:<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$p </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">accessProperty</span><span class="keyword">(</span><span class="default">$pNumber</span><span class="keyword">, </span><span class="string">"owner"</span><span class="keyword">);<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// ... and change that:<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$p </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br />&nbsp; &nbsp; &nbsp; &nbsp; }<br />&nbsp; &nbsp; &nbsp; &nbsp; public function </span><span class="default">call </span><span class="keyword">(</span><span class="default">$pLabel</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">// this does not work since "call" is protected:<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // $this-&gt;phoneNumbers[$pLabel]-&gt;call();<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // instead, we dispatch the call request:<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">invokeMethod</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">phoneNumbers</span><span class="keyword">[</span><span class="default">$pLabel</span><span class="keyword">], </span><span class="string">"call"</span><span class="keyword">, array());<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; class </span><span class="default">PhoneNumber </span><span class="keyword">extends </span><span class="default">Dispatcher </span><span class="keyword">{<br />&nbsp; &nbsp; &nbsp; &nbsp; private </span><span class="default">$countryCode</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; private </span><span class="default">$areaCode</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; private </span><span class="default">$number</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; protected </span><span class="default">$owner</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; <br />&nbsp; &nbsp; &nbsp; &nbsp; public function </span><span class="default">__construct </span><span class="keyword">(</span><span class="default">$pCountryCode</span><span class="keyword">, </span><span class="default">$pAreaCode</span><span class="keyword">, </span><span class="default">$pNumber</span><span class="keyword">) {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">countryCode </span><span class="keyword">= </span><span class="default">$pCountryCode</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">areaCode </span><span class="keyword">= </span><span class="default">$pAreaCode</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">number </span><span class="keyword">= </span><span class="default">$pNumber</span><span class="keyword">;<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; &nbsp; &nbsp; protected function </span><span class="default">call </span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo(</span><span class="string">"calling " </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">countryCode </span><span class="keyword">. </span><span class="string">"-" </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">areaCode </span><span class="keyword">. </span><span class="string">"-" </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">number </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">);<br />&nbsp; &nbsp; &nbsp; &nbsp; }<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; </span><span class="default">$person </span><span class="keyword">= new </span><span class="default">Person</span><span class="keyword">(</span><span class="string">"John Doe"</span><span class="keyword">);<br />&nbsp; &nbsp; </span><span class="default">$number1 </span><span class="keyword">= new </span><span class="default">PhoneNumber</span><span class="keyword">(</span><span class="default">12</span><span class="keyword">, </span><span class="default">345</span><span class="keyword">, </span><span class="default">67890</span><span class="keyword">);<br />&nbsp; &nbsp; </span><span class="default">$number2 </span><span class="keyword">= new </span><span class="default">PhoneNumber</span><span class="keyword">(</span><span class="default">34</span><span class="keyword">, </span><span class="default">5678</span><span class="keyword">, </span><span class="default">90123</span><span class="keyword">);<br />&nbsp; &nbsp; </span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">addNumber</span><span class="keyword">(</span><span class="default">$number1</span><span class="keyword">, </span><span class="string">"home"</span><span class="keyword">);<br />&nbsp; &nbsp; </span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">addNumber</span><span class="keyword">(</span><span class="default">$number2</span><span class="keyword">, </span><span class="string">"office"</span><span class="keyword">);<br />&nbsp; &nbsp; </span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">call</span><span class="keyword">(</span><span class="string">"home"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Without this pattern you would have to make $owner and call() public in PhoneNumber.<br /><br />Best regards,</span>
</code></div>
  </div>
 </div>
  <div class="note" id="125068">  <div class="votes">
    <div id="Vu125068">
    <a href="/manual/vote-note.php?id=125068&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125068">
    <a href="/manual/vote-note.php?id=125068&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125068" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#125068" class="name">
  <strong class="user"><em>benjam</em></strong></a><a class="genanchor" href="#125068"> &para;</a><div class="date" title="2020-06-01 09:16"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom125068">
<div class="phpcode"><code><span class="html">
When overriding a private method with a more visible child method, the parent method may be called instead.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Parent </span><span class="keyword">{<br />&nbsp; &nbsp; private function </span><span class="default">foo</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">"Parent Foo\n"</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public function </span><span class="default">call_foo</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">();<br />&nbsp; &nbsp; }<br />}<br /><br />class </span><span class="default">Child </span><span class="keyword">extends </span><span class="default">Parent </span><span class="keyword">{<br />&nbsp; &nbsp; public function </span><span class="default">foo</span><span class="keyword">() {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="string">"Child Foo\n"</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Child</span><span class="keyword">();<br /></span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">call_foo</span><span class="keyword">();<br /></span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />will output:<br />Parent Foo<br />Child Foo</span>
</code></div>
  </div>
 </div>
  <div class="note" id="117929">  <div class="votes">
    <div id="Vu117929">
    <a href="/manual/vote-note.php?id=117929&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117929">
    <a href="/manual/vote-note.php?id=117929&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117929" title="28% like this...">
    -9
    </div>
  </div>
  <a href="#117929" class="name">
  <strong class="user"><em>willbrownsberger at gmail dot com</em></strong></a><a class="genanchor" href="#117929"> &para;</a><div class="date" title="2015-09-03 01:20"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom117929">
<div class="phpcode"><code><span class="html">
Just wanted to share a trap for the unwary.&nbsp; Where there are several layers of object assignments, setting the bottom object's properties as private will prevent its exposure.&nbsp; However, if the bottom object has public properties, intermediate objects which are themselves set as private but are derived from the bottom object can inadvertently be exposed to updates.&nbsp; <br /><br />This follows logically from the reference model in php ( <a href="http://php.net/manual/en/language.oop5.references.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.oop5.references.php</a> ), but can yield a result that is surprising until one gets the reference model.&nbsp; The following example demonstrates the phenomenon.<br /><br />// underlying class for offering database results to other objects<br />// __construct method yields public results -- bottom object in example<br /><br />class database_result {<br />&nbsp; &nbsp; public $column1;<br />&nbsp; &nbsp; public function __construct() {<br />&nbsp; &nbsp; &nbsp; &nbsp; // . . . database access . . . <br />&nbsp; &nbsp; &nbsp; &nbsp; $this-&gt;column1 = 'foo';<br />&nbsp; &nbsp; }<br />}<br /><br />// application dictionary accesses database and caches results <br />// for application objects -- this is the second layer&nbsp; in the example<br /><br />class&nbsp; dictionary {<br />&nbsp; &nbsp; private $reference_object;<br />&nbsp; &nbsp; public function __construct (){<br />&nbsp; &nbsp; &nbsp; &nbsp; $this-&gt;reference_object = new database_result;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public function get_reference_object() {<br />&nbsp; &nbsp; &nbsp; &nbsp; return ( $this-&gt;reference_object );<br />&nbsp; &nbsp; }<br />}<br /><br />$dictionary = new dictionary;<br />/* $dictionary-&gt;reference_object cannot be accessed directly<br />* $dictionary-&gt;reference_object-&gt;column1 = 'foochanged';<br />* yields Fatal error: Cannot access private property dictionary::$reference_object in /var/www/html/index.php&nbsp; . . .<br />*/<br /><br />$pointer_to_dictionary = $dictionary;<br />/*<br />* if assign $dictionary to new variable, the new variable is a pointer and its properties are still private<br />* $pointer_to_dictionary-&gt;reference_object-&gt;column1 = 'foochanged';<br />* Fatal error: Cannot access private property dictionary::$reference_object in /var/www/html/index.php&nbsp; . . .<br />* $pointer_to_dictionary = $dictionary-&gt;reference_object;<br />*&nbsp; Fatal error: Cannot access private property dictionary::$reference_object in /var/www/html/index.php&nbsp; . . .<br />*/<br /><br />//&nbsp; now set up a client class that will use a working copy of the dictionary -- this is the third layer in the example<br /><br />class dictionary_user {<br />&nbsp; &nbsp; private $pointer_to_dictionary;<br />&nbsp; &nbsp; public function __construct () {<br />&nbsp; &nbsp; &nbsp; &nbsp; global $dictionary;<br />&nbsp; &nbsp; &nbsp; &nbsp; // $this-&gt;pointer_to_dictionary = $dictionary-&gt;reference_object;<br />&nbsp; &nbsp; &nbsp; &nbsp; // Fatal error: Cannot access private property dictionary::$reference_object in /var/www/html/index.php&nbsp; . . .<br />&nbsp; &nbsp; &nbsp; &nbsp; // still cannot directly access dictionary properties even in this context, except through getter<br />&nbsp; &nbsp; &nbsp; &nbsp; $this-&gt;pointer_to_dictionary = $dictionary-&gt;get_reference_object();<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; // however, can now operate on dictionary through the pointer<br />&nbsp; &nbsp; public function set_pointer_to_dictionary ( $value ) {<br />&nbsp; &nbsp; &nbsp; &nbsp; $this-&gt;pointer_to_dictionary-&gt;column1 = $value;<br />&nbsp; &nbsp; }<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; public function get_pointer_to_reference_object(){<br />&nbsp; &nbsp; &nbsp; &nbsp; return ($this-&gt;pointer_to_dictionary);&nbsp; &nbsp; <br />&nbsp; &nbsp; }<br />}<br /><br />$dictionary_user = new dictionary_user;<br />$dictionary_user-&gt;set_pointer_to_dictionary ( 'foochanged' );<br />echo ('&lt;br/&gt;');<br />var_dump ( $dictionary_user-&gt;get_pointer_to_reference_object()); echo '&lt;br/&gt;';<br />// object(database_result)#2 (1) { ["column1"]=&gt; string(10) "foochanged" } -- of course, the user object is changed<br />var_dump ( $dictionary-&gt;get_reference_object() ); <br />// object(database_result)#2 (1) { ["column1"]=&gt; string(10) "foochanged" }&nbsp; -- however, the private dictionary object is also now corrupted!<br />// Note:&nbsp; If the underlying database result object $column1 as private, this will cause set_pointer_to_dictionary to generate the usual fatal error<br />// but&nbsp; making the bottom object private may defeat its purpose of exposing results.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="119485">  <div class="votes">
    <div id="Vu119485">
    <a href="/manual/vote-note.php?id=119485&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119485">
    <a href="/manual/vote-note.php?id=119485&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119485" title="26% like this...">
    -14
    </div>
  </div>
  <a href="#119485" class="name">
  <strong class="user"><em>noel darlow</em></strong></a><a class="genanchor" href="#119485"> &para;</a><div class="date" title="2016-06-18 08:19"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom119485">
<div class="phpcode"><code><span class="html">
After having the how explained, many people will still be left wondering about the why. How should the different kinds of visibility be used in practice?<br /><br />Some kind of labelling for the public and private parts of an interface is certainly necessary. We need to be clear which methods will be part of the public interface and which are only used internally .<br /><br />In older versions of php notionally-private functions were prefixed with an underscore - a much simpler and more elegant solution to the labelling problem. "Protected" adds clutter which affects readability. It adds a lot of unnecessary typing to what is already a keyboard-intensive job.<br /><br />As for enforcement.. no-one ever got mixed up about public/private so long as they were clearly labelled. As such, "protected" is an attempt to solve a problem which simply did not exist.<br /><br />Private is even worse. It specifically encourages bad object-oriented code with the use of inheritance in places where you should be thinking about separate, co-operating objects. <br /><br />A feeling that classes which inherit from each other need to hide some of their bits from each other is a sure sign that you need to break the code up into separate objects. This is exactly what encapsulation is for. It doesn't make any sense to try to encapsulate bits inside an inheritance tree. Classes which extend other classes must always be free to override whatever it is they need to override in their parent classes.<br /><br />In short, use protected if you must, do not use private at all. Do not try to squeeze too much new functionality into an inheritance tree: create networks of co-operating objects with clearly-defined responsibilities instead.<br /><br />It's a real shame that php took the decision to implement private and protected. They add nothing to our ability to write good quality OO code; they simply make that code more difficult to write and to understand.&nbsp;&nbsp; Clarity and simplicity are incredibly important in programming but now both php programmers and php developers are stuck with these unnecessary layers of complexity.</span>
</code></div>
  </div>
 </div>
  <div class="note" id="118738">  <div class="votes">
    <div id="Vu118738">
    <a href="/manual/vote-note.php?id=118738&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118738">
    <a href="/manual/vote-note.php?id=118738&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118738" title="20% like this...">
    -12
    </div>
  </div>
  <a href="#118738" class="name">
  <strong class="user"><em>gried at NOSPAM dot nsys dot by</em></strong></a><a class="genanchor" href="#118738"> &para;</a><div class="date" title="2016-01-28 06:18"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom118738">
<div class="phpcode"><code><span class="html">
I want to merge notes from different comments about visibility of class members from parent class / sibling class point of view because visibility rules are similar. Here are main points:<br />&nbsp; &nbsp; 1. Methods declared in parent class can access some child class members.<br />&nbsp; &nbsp; 2. Class can access some sibling class members using methods declared in common parent. NB: only inherited not-overridden parent method could be used, if you override it in current class you have to call parent method statically to get access to sibling members.<br /><br />You can see list of members that could be accessed via these methods below:<br />- inherited protected / private property – OK;<br />- inherited protected / private method without overriding – OK;<br />- inherited protected method with overriding – OK;<br />- inherited private method with overriding – FAIL, original parent method will be called;<br />- own protected property / method – OK;<br />- own private property / method – FAIL, critical error.</span>
</code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.visibility&amp;redirect=https://www.php.net/manual/en/language.oop5.visibility.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/copyright.php">Copyright &copy; 2001-2022 The PHP Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
        <li><a href="https://github.com/php/web-php/blob/master/manual%2Fen%2Flanguage.oop5.visibility.php">View Source</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
 <!-- External and third party libraries. -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="/cached.php?t=1657730402&amp;f=/js/ext/hogan-3.0.2.min.js"></script>
<script src="/cached.php?t=1421837618&amp;f=/js/ext/typeahead.min.js"></script>
<script src="/cached.php?t=1657876202&amp;f=/js/ext/mousetrap.min.js"></script>
<script src="/cached.php?t=1657730402&amp;f=/js/ext/jquery.scrollTo.min.js"></script>
<script src="/cached.php?t=1653918602&amp;f=/js/search.js"></script>
<script src="/cached.php?t=1657891202&amp;f=/js/common.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

</body>
</html>
