<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Grid</li>
        <li class="breadcrumb-item active">Grid Document</li>
      </ol>
      <ul class="app-actions">
        <li>
          <a href="#" id="reportrange">
            <span class="range-text"></span>
            <i class="icon-chevron-down"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="icon-export"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- Page header end -->
    <!-- Main container start -->
    <div class="main-container">
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-body">
              <h2>How it Works?</h2>
              <p>Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s built with flexbox and is fully responsive. Below is an example and an in-depth look at how the grid comes together.</p>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Columns and gutters</div>
              <div class="card-sub-title"> Number of Default Columns = 12 <br /> Column Default Gutter Width = 30px </div>
              <div class="card-title mt-5">Grid options</div>
              <div class="card-sub-title"> While Bootstrap uses ems or rems for defining most sizes, pxs are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the font size. See how aspects of the Bootstrap grid system work across multiple devices with a handy table </div>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center"> Extra small <br>
                      <small>&lt;576px</small>
                    </th>
                    <th class="text-center"> Small <br>
                      <small>≥576px</small>
                    </th>
                    <th class="text-center"> Medium <br>
                      <small>≥768px</small>
                    </th>
                    <th class="text-center"> Large <br>
                      <small>≥992px</small>
                    </th>
                    <th class="text-center"> Extra large <br>
                      <small>≥1200px</small>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-nowrap" scope="row">Max container width</td>
                    <td>None (auto)</td>
                    <td>540px</td>
                    <td>720px</td>
                    <td>960px</td>
                    <td>1140px</td>
                  </tr>
                  <tr>
                    <td class="text-nowrap" scope="row">Class prefix</td>
                    <td>
                      <code>.col-</code>
                    </td>
                    <td>
                      <code>.col-sm-</code>
                    </td>
                    <td>
                      <code>.col-md-</code>
                    </td>
                    <td>
                      <code>.col-lg-</code>
                    </td>
                    <td>
                      <code>.col-xl-</code>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap" scope="row"># of columns</td>
                    <td colspan="5">12</td>
                  </tr>
                  <tr>
                    <td class="text-nowrap" scope="row">Gutter width</td>
                    <td colspan="5">30px (15px on each side of a column)</td>
                  </tr>
                  <tr>
                    <td class="text-nowrap" scope="row">Nestable</td>
                    <td colspan="5">Yes</td>
                  </tr>
                  <tr>
                    <td class="text-nowrap" scope="row">Column ordering</td>
                    <td colspan="5">Yes</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Equal-width</div>
              <div class="card-sub-title"> For example, here are two grid layouts that apply to every device and viewport, from xs to xl. Add any number of unit-less classes for each breakpoint you need and every column will be the same width. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col">
                    <div class="column"> 1 of 2 </div>
                  </div>
                  <div class="col">
                    <div class="column"> 2 of 2 </div>
                  </div>
                  <div class="col">
                    <div class="column"> 3 of 3 </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>1 of 2
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>2 of 2
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>3 of 3
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Columns can be broken into multiple lines</div>
              <div class="card-sub-title"> Equal-width columns can be broken into multiple lines, but there was a Safari flexbox bug that prevented this from working without an explicit flex-basis or border. There are workarounds for older browser versions, but they shouldn’t be necessary if you’re up-to-date. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col">
                    <div class="column"> Column </div>
                  </div>
                  <div class="col">
                    <div class="column"> Column </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">
                    <div class="column"> Column </div>
                  </div>
                  <div class="col">
                    <div class="column"> Column </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>Column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>Column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"w-100"</span>
						<span class="nt">&gt;&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>Column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>Column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Setting one column width</div>
              <div class="card-sub-title"> Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col">
                    <div class="column"> 1 of 3 </div>
                  </div>
                  <div class="col-6">
                    <div class="column"> 2 of 3 (wider) </div>
                  </div>
                  <div class="col">
                    <div class="column"> 3 of 3 </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>1 of 3
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-6"</span>
						<span class="nt">&gt;</span>2 of 3 (wider)
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>3 of 3
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Variable width content</div>
              <div class="card-sub-title"> Use col-{breakpoint}-auto classes to size columns based on the natural width of their content. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col-lg-2">
                    <div class="column"> 1 of 3 </div>
                  </div>
                  <div class="col-auto">
                    <div class="column"> Auto width </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="column"> 3 of 3 </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-lg-2"</span>
						<span class="nt">&gt;</span>1 of 3
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-auto"</span>
						<span class="nt">&gt;</span>Auto width
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-lg-2"</span>
						<span class="nt">&gt;</span>3 of 3
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Variable width content</div>
              <div class="card-sub-title"> Use col-{breakpoint}-auto classes to size columns based on the natural width of their content. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col">
                    <div class="column"> 1 of 3 </div>
                  </div>
                  <div class="col-auto">
                    <div class="column"> Auto width </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="column"> 3 of 3 </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>1 of 3
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-auto"</span>
						<span class="nt">&gt;</span>Auto width
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-lg-2"</span>
						<span class="nt">&gt;</span>3 of 3
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Breakpoints</div>
              <div class="card-sub-title"> For grids that are the same from the smallest of devices to the largest, use the .col and .col-* classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to .col </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col">
                    <div class="column"> col </div>
                  </div>
                  <div class="col">
                    <div class="column"> col </div>
                  </div>
                  <div class="col">
                    <div class="column"> col </div>
                  </div>
                  <div class="col">
                    <div class="column"> col </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Breakpoints</div>
              <div class="card-sub-title"> For grids that are the same from the smallest of devices to the largest, use the .col and .col-* classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to .col </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col-2">
                    <div class="column"> col-2 </div>
                  </div>
                  <div class="col-4">
                    <div class="column"> col-4 </div>
                  </div>
                  <div class="col-4">
                    <div class="column"> col-4 </div>
                  </div>
                  <div class="col-2">
                    <div class="column"> col-2 </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-2"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-4"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-4"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-2"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Align items start</div>
              <div class="card-sub-title"> Use flexbox alignment utilities to vertically and horizontally align columns. Internet Explorer 10-11 do not support vertical alignment of flex items when the flex container has a min-height as shown below. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row align-items-start h-150">
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row align-items-start h-150"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Align items center</div>
              <div class="card-sub-title"> Use flexbox alignment utilities to vertically and horizontally align columns. Internet Explorer 10-11 do not support vertical alignment of flex items when the flex container has a min-height as shown below. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row align-items-center h-150">
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row align-items-center h-150"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Align items end</div>
              <div class="card-sub-title"> Use flexbox alignment utilities to vertically and horizontally align columns. Internet Explorer 10-11 do not support vertical alignment of flex items when the flex container has a min-height as shown below. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row align-items-end h-150">
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col">
                    <div class="column"> Col </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row align-items-end h-150"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Vertical Alignment</div>
              <div class="card-sub-title"> Use flexbox alignment utilities to vertically and horizontally align columns. Internet Explorer 10-11 do not support vertical alignment of flex items when the flex container has a min-height as shown below. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row h-150">
                  <div class="col align-self-start">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col align-self-center">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col align-self-end">
                    <div class="column"> Col </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row h-150"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col align-items-start"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col align-items-center"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col align-items-end"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Horizontal Alignment</div>
              <div class="card-sub-title"> Use flexbox alignment utilities to vertically and horizontally align columns. Internet Explorer 10-11 do not support vertical alignment of flex items when the flex container has a min-height as shown below. </div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row justify-content-start">
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row justify-content-start"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row justify-content-center">
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row justify-content-center"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row justify-content-end">
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row justify-content-end"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row justify-content-around">
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row justify-content-around"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card m-0">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row justify-content-between">
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                          <div class="col-4">
                            <div class="column"> Col 4 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row justify-content-between"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">No gutters</div>
              <div class="card-sub-title"> The gutters between columns in our predefined grid classes can be removed with .no-gutters. This removes the negative margins from .row and the horizontal padding from all immediate children columns. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row no-gutters">
                  <div class="col-8">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col-4">
                    <div class="column"> Col </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row no-gutters"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-8"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-4"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Column breaks</div>
              <div class="card-sub-title"> Breaking columns to a new line in flexbox requires a small hack: add an element with width: 100% wherever you want to wrap your columns to a new line. Normally this is accomplished with multiple .rows, but not every implementation method can account for this. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col-4">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col-4">
                    <div class="column"> Col </div>
                  </div>
                  <!-- Force next columns to break to new line -->
                  <div class="w-100"></div>
                  <div class="col-4">
                    <div class="column"> Col </div>
                  </div>
                  <div class="col-4">
                    <div class="column"> Col </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-4"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-4"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"w-100"</span>
						<span class="nt">&gt;</span>.w-100 Force next columns to break to new line
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-4"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-4"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Column break at specific breakpoints</div>
              <div class="card-sub-title"> Breaking columns to a new line in flexbox requires a small hack: add an element with width: 100% wherever you want to wrap your columns to a new line. Normally this is accomplished with multiple .rows, but not every implementation method can account for this. </div>
            </div>
            <div class="card-body">
              <div class="grid-container">
                <div class="row">
                  <div class="col-6 col-sm-3">
                    <div class="column"> Column </div>
                  </div>
                  <div class="col-6 col-sm-3">
                    <div class="column"> Column </div>
                  </div>
                  <!-- Force next columns to break to new line at md breakpoint and up -->
                  <div class="w-100 d-none d-md-block"></div>
                  <div class="col-6 col-sm-3">
                    <div class="column"> Column </div>
                  </div>
                  <div class="col-6 col-sm-3">
                    <div class="column"> Column </div>
                  </div>
                </div>
              </div>
              <!-- Code Syntax -->
              <figure class="highlight">
                <pre>
					<code class="language-html" data-lang="html">
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"row"</span>
						<span class="nt">&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-6 col-sm-3"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-6 col-sm-3"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"w-100 d-none d-md-block"</span>
						<span class="nt">&gt;</span>.w-100 Force next columns to break to new line at md breakpoint and up
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-6"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;div</span>
						<span class="na">class=</span>
						<span class="s">"col-6"</span>
						<span class="nt">&gt;</span>column
						<span class="nt">&lt;/div&gt;</span>
						<span class="nt">&lt;/div&gt;</span>
					</code>
				</pre>
              </figure>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Offsetting columns</div>
              <div class="card-sub-title"> You can offset grid columns in two ways: our responsive .offset- grid classes and our margin utilities. Grid classes are sized to match columns while margins are more useful for quick layouts where the width of the offset is variable. </div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="column"> col-md-4 </div>
                          </div>
                          <div class="col-md-4 offset-md-4">
                            <div class="column"> col-md-4 offset-md-4 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-4 offset-md-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row">
                          <div class="col-md-3 offset-md-3">
                            <div class="column"> col-md-3 offset-md-3 </div>
                          </div>
                          <div class="col-md-3 offset-md-3">
                            <div class="column"> col-md-3 offset-md-3 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-3 offset-md-3"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-3 offset-md-3"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row">
                          <div class="col-md-6 offset-md-3">
                            <div class="column"> col-md-6 offset-md-3 </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-6 offset-md-3"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- Card start -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Margin utilities</div>
              <div class="card-sub-title"> With the move to flexbox in v4, you can use margin utilities like .mr-auto to force sibling columns away from one another. </div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="column"> .col-md-4 </div>
                          </div>
                          <div class="col-md-4 ml-auto">
                            <div class="column"> .col-md-4 .ml-auto </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-4"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-4 ml-auto"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row">
                          <div class="col-md-5 ml-md-auto">
                            <div class="column"> .col-md-5 .ml-md-auto </div>
                          </div>
                          <div class="col-md-5 ml-md-auto">
                            <div class="column"> .col-md-5 .ml-md-auto </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-5 ml-md-auto"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-md-5 ml-md-auto"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="grid-container">
                        <div class="row">
                          <div class="col-auto mr-auto">
                            <div class="column"> .col-auto .mr-auto </div>
                          </div>
                          <div class="col-auto">
                            <div class="column"> .col-auto </div>
                          </div>
                        </div>
                      </div>
                      <!-- Code Syntax -->
                      <figure class="highlight">
                        <pre>
							<code class="language-html" data-lang="html">
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"row"</span>
								<span class="nt">&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-auto mr-auto"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;div</span>
								<span class="na">class=</span>
								<span class="s">"col-auto"</span>
								<span class="nt">&gt;</span>column
								<span class="nt">&lt;/div&gt;</span>
								<span class="nt">&lt;/div&gt;</span>
							</code>
						</pre>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card end -->
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Prism -->
<script src="vendor/prism/prism.js"></script>