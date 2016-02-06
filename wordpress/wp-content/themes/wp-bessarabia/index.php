<?php get_header(); ?>

      <article>
        <h1 class="ctitle">Пример контента (рыба)</h1>
        <p>The purpose of this HTML is to help determine what default settings are with Bitters and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

        <hr>

        <h1>h1. Heading</h1>
        <h2>h2. Heading</h2>
        <h3>h3. Heading</h3>
        <h4>h4. Heading</h4>
        <h5>h5. Heading</h5>
        <h6>h6. Heading</h6>

        <hr>

        <h1 class="ctitle">Paragraph</h1>

        <p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

        <p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

        <hr>

        <h1 class="ctitle">List Types</h1>

        <h3>Definition List - dl > dt + dd</h3>
        <dl>
          <dt>Definition List Title</dt>
          <dd>This is a definition list division.</dd>
        </dl>

        <h3>Ordered List - ol</h3>
        <ol>
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
        </ol>

        <h3>Unordered List - ul</h3>
        <ul>
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
        </ul>

        <hr>

        <h1 class="ctitle">Fieldsets and Form Elements</h1>

        <fieldset>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>

          <form>
            <h2>Form Element</h2>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>

            <p><label for="text_field">Text Field:</label>
              <input type="text" id="text_field"></p>

            <p><label for="text_area">Text Area:</label>
              <textarea id="text_area"></textarea></p>

            <p><label for="select_element">Select Element:</label>
              <select name="select_element">
                <optgroup label="Option Group 1">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </optgroup>
                <optgroup label="Option Group 2">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </optgroup>
            </select></p>

            <p><label for="radio_buttons">Radio Buttons:</label>
              <label>
                <input type="radio" class="radio" name="radio_button" value="radio_1"> Radio 1
              </label>
              <label>
                <input type="radio" class="radio" name="radio_button" value="radio_2"> Radio 2
              </label>
              <label>
                <input type="radio" class="radio" name="radio_button" value="radio_3"> Radio 3
              </label>
            </p>

            <p><label for="checkboxes">Checkboxes:</label>
              <label>
                <input type="checkbox" class="checkbox" name="checkboxes" value="check_1"> Checkbox 1
              </label>
              <label>
                <input type="checkbox" class="checkbox" name="checkboxes" value="check_2"> Checkbox 2
              </label>
              <label>
                <input type="checkbox" class="checkbox" name="checkboxes" value="check_3"> Checkbox 3
              </label>
            </p>

            <p><label for="password">Password:</label>
              <input type="password" class="password" name="password">
            </p>

            <p><label for="file">File Input:</label>
              <input type="file" class="file" name="file">
            </p>


            <p><input type="submit" value="Submit"></p>
          </form>
        </fieldset>

        <hr>

        <h1 class="ctitle">Tables</h1>

        <table cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
            </tr>
            <tr>
              <td>Division 1</td><td>Division 2</td><td>Division 3</td>
            </tr>
            <tr class="even">
              <td>Division 1</td><td>Division 2</td><td>Division 3</td>
            </tr>
            <tr>
              <td>Division 1</td><td>Division 2</td><td>Division 3</td>
            </tr>
          </tbody>
        </table>
      </article>

      <aside class="sidebar" role="complementary">
        <div class="widget">
          <h6>Пример виджета</h6>
          <ul>
            <li class="cat-item-none">Рубрик нет</li>
          </ul>
        </div><!-- widget -->
      </aside><!-- /sidebar -->

    </div><!-- /.inner -->
  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="inner">

    <ul class="footernav">
      <li><a href="">Сообщить новость</a></li>
      <li><a href="">Реклама</a></li>
      <li><a href="">Обратная связь</a></li>
    </ul>

    <p class="copyright">
       Все права защищены
    </p><!-- /copyright -->

  </div><!-- /.inner -->
</footer><!-- /footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
    <script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>