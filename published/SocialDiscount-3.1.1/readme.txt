������ ������ �� "����" � ��� �����.
�����: Gennady Telegin <support@itxd.ru>

������ ������������� ������ ������������ �� ����� �� ������� �� ������ "��� ��������" ��� "���������� �������" ���������� �����.

������ �������������� ��� �����:
 * ���������
 * Facebook
 * Google Plus
 * ��� ���
 * �������������
 * Twitter

�������������� ������ �������� AddThis.com � Pluso.ru - ������ ������������� ����� ����� ����� �� ������, ��� ������������� �� ���������� ����.
 
����������� ���������:
 * ������ ��������� ���� �� �������� ����, ���� �� ���� �� �����.
 * ����� ���� ������ - ������� ��� �������������.
 * ������ �������� � ����� ��� ���� ������� � ��� ������� ������ � �����������.
 * ������������� ��������� �������� ������ ��� ������ ������� � ������� �������� (���� ��� ���� �� �����).
 * � ���� ����������� ������� ����, ��� ������ ������������� �� ����. � ������� ����� ������, ��� ������ �������� (����� ���� html � ��������� ��� ��������� div). ��������� �������� ����������� ����������� �� ��������.
 * ����������� �������� ������ �� �������, �������� � ���� ������. �� ��������� ��� �����������.
 
�� ���� �������� ���������, ���������, ��������� � ��������� � ������ ����������� �� support@itxd.ru

��� ��������� ������:
1. ���������� VQMod (https://code.google.com/p/vqmod/), ���� �� �� ����������.
���� ��� �� ����������, �� ��������� � ������ ���� ����������, ����������� ��� ������ ������� ������, ����� ����� ������� ������� (������� ����).

2. ���������� ���������� �� ����� "upload" �� ��� ������.

3. ������� � ����������������� ���������, ��������� � ����������->��������� � ������->������ �� ����. ������� ����������, ����� ��������.

4. ������� �������� ������ �� ���� ��� �� ������ � ��������������� ����. �������� ���������.

4a. ���� � ��� ���� Shoppica2, ���������� ����� ���������� �� ����� shoppica2 �� ��� ������. ��� ������� ���� ����.

5. ������ ����� ���������� ������ ���������� ����� � ������� ������. ������� ��� ����� ����������� ��������� ���������:
  5a. � ������� ������������ (��� ������ ��� ��������� �� default ����):
     1. ������� � ���������������� ���������, ��������� � ����������->��������� � ������->������ �� ����->��������
	 2. ��������� �� ������� ������ ���������� �����
	 3. �� ���� ������� ��� ������ ��� ���� �������� ��� ������, ����� ���� ���������� ��� ���������. ��� ���� ���������� ����� ����� ��������� ��� ����� ���, ������ ��� ��������.
	 4. �������� ��� ������ ��������� �������� ���������� ����� � ���������������� �����.
	 5. ������� ���������.
	 6. � ����� catalog/view/theme/default/template/product/product.tpl, ������� ������ <div id="share">. ������ ����� ����� ��������� ��� AddThis - ������� ���.
	 7. ����� <div id="share"></div> �������� {SOCIAL_BUTTONS}, ����� ���������� ���:
	       <div id="share"></div>
		   {SOCIAL_BUTTONS}
	 8. ���, ������� �� ��� ���� - ������ ��������.
  5b. ���������� ��� Pluso ��� AddThis (���������� �� ���������� � default ����) � �������� � ���������� ������ �� ���������.
  5c. ��������������, ��� ������������:	 
     1. �������������� ���������� ������ "��� ��������" �� �������� �������� ������. ��� �����:
	   * ���������:
         a. �������� ��� ������ �� �������� http://vk.com/developers.php?p=Like
         b. ���������� ��� � ������ ����� � ����� product/product.tpl ����� ���� ����������.
       * Facebook:  http://developers.facebook.com/docs/reference/plugins/like/, HTML5 �������
       * Google Plus: https://developers.google.com/+/web/+1button/, � ��� <g:plusone> �������� ������� callback="plusone_share", ��������:
            <g:plusone callback="plusone_share"></g:plusone>
	       �����: �������� �������� Google (https://developers.google.com/+/web/buttons-policy) ��������� ������ �����-���� �������� ������������ � ����� �� ������� ������ +1. ������� ��� ����� � ������ ������ �� ������ ��� ��������������� �� ���� �������� �� ����.	 
       * ��� ���: http://api.mail.ru/sites/plugins/share/
       * �������������: http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=23167439
       * Twitter (https://twitter.com/about/resources/buttons#tweet, https://dev.twitter.com/docs/intents/events) ���������� ��������� ��� ������:
			<a href="https://twitter.com/share" class="twitter-share-button" >Tweet</a>
			<script type="text/javascript" charset="utf-8">
			  window.twttr = (function (d,s,id) {
				var t, js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
				js.src="//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
				return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
			  }(document, "script", "twitter-wjs"));
			</script>

������ ����� � ������.

Checkbox ����� � ����� �������� ��� ��������� ������ ��� ������ ��������. ���������������� �������� ������ �����������, ��� ��� ���� ��������� ������ � ����� �������� � �������� - �� ������������ ����� ������ ���������� ��� ������.

���� �������� ��������� ��� �������, �� ����������� �� support@itxd.ru