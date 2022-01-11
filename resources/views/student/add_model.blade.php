<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
            


       
            
                                <form action="add_giver" method="post">
                                    {{ csrf_field() }}
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">الاسم</label>
                                            <input type="text" class="form-control" name="name">
            
                                        </div>
            
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">الجوال</label>
                                            <input type="text" class="form-control" name="jawal">
                                        </div>
            
            
            
            
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">رقم الحساب</label>
                                            <input type="text" class="form-control" name="bank_number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">اسم البنك</label>
                                            <input type="text" class="form-control" name="bank_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">نوع الحوالة</label>
            
                                            <select name="transfer"  class="form-control">
                                                <option value="2">حوالة</option>
                                                <option value="1" selected="selected">استقطاع</option>
                                            </select>
                                        </div>
            
            
            
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">اليوم
            
                                                <select name="day"  class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
            
                                                </select></label>
            
                                            <label for="exampleInputPassword1">الشهر
                                                <select name="Month"  class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
            
                                                </select></label>
            
            
                                            <label for="exampleInputPassword1">السنة
            
                                                <select name="Year"  class="form-control">
                                                    <option value="1440">1440</option>
                                                    <option value="1441">1441</option>
                                                    <option value="1442">1442</option>
                                                    <option value="1443" selected="selected">1443</option>
                                                    <option value="1444">1444</option>
                                                </select></label>
            
            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">عدد الطلاب</label>
                                            <input type="text" class="form-control" name="student">
                                        </div>
            
            
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">التاريخ ميلادي</label>
                                            <input type="text" class="form-control" name="date_k"
                                                value=" {{ date('Y-m-d H:i:s') }} ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">الحلقة</label>
                                            <select name="school" class="form-control">
            
                                                @foreach ($school as $schools)
            
                                                <option>{{$schools->name}}</option>
            
                                                @endforeach
                                            </select>
            
                                        </div>
            
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">البريد</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">كلمة المرور</label>
                                            <input type="text" class="form-control" name="password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary"> اضافة</button>
                                    </div>
                                </form>
            
         
            





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>