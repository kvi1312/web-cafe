INSERT into CAGETORY(C_ID, C_NAME, C_CODE) VALUES
   ('1', 'tra sua', 'tra-sua'),
   ('2', 'ca phe', 'ca-phe'),
   ('3', 'ca phe my', 'ca-phe-my');

INSERT INTO PRODUCT(C_ID, P_NAME, P_SIZE, P_MATERIAL, P_PRICE, P_DES, P_STATUS,P_THUMBNAIL) VALUES 
   ('2', 'CAFE PHIN', 'M', 'Cà phê tự nhiên', '40000', 'Được trích xuất từ 100% cà phê nguyên chất, với cách chế biến mang đậm bản sắc Việt Nam, khiến cho hương vị đậm đà', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/cafe-phin.jpg'),
   ('2', 'CAFE PHIN', 'L', 'Cà phê tự nhiên', '55000', 'Được trích xuất từ 100% cà phê nguyên chất, với cách chế biến mang đậm bản sắc Việt Nam, khiến cho hương vị đậm đà', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/cafe-phin.jpg'),
   ('2', 'CAFE BẠC XĨU', 'M', 'Cà phê tự nhiên và sữa hộp', '45000', 'Một loại nước uống nâng cấp của cà phê sữa với tỉ lệ 60% sữa và 40% cà phê, ngọt hơn và nhiều sữa hơn', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/bac-xiu.jpg'),
   ('2', 'CAFE BẠC XĨU', 'L', 'Cà phê tự nhiên và sữa hộp', '60000', 'Một loại nước uống nâng cấp của cà phê sữa với tỉ lệ 60% sữa và 40% cà phê, ngọt hơn và nhiều sữa hơn', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/bac-xiu.jpg'),
   ('2', 'CAFE SỮA ĐÁ', 'M', 'Cà phê tự nhiên và sữa hộp', '40000', 'Thức uống dành cho các bạn thèm vị ngọt nhưng vừa phải với tỉ lệ 50% cà phê và 50% sữa', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/cafe-suada.jpg'),
   ('2', 'CAFE SỮA ĐÁ', 'L', 'Cà phê tự nhiên và sữa hộp', '55000', 'Thức uống dành cho các bạn thèm vị ngọt nhưng vừa phải với tỉ lệ 50% cà phê và 50% sữa', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/cafe-suada.jpg'),
   ('2', 'CAFE TRỨNG', 'M', 'Cà phê tự nhiên, trứng gà, sữa đặc', '55000', 'độ béo siêu cao và béo ngậy', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/caphe-trung.jpg'),
   ('2', 'CAFE TRỨNG', 'L', 'Cà phê tự nhiên, trứng gà, sữa đặc', '65000', 'độ béo siêu cao và béo ngậy', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/caphe-trung.jpg'),
   ('2', 'CAFE CAM', 'M', 'Cà phê bột quế, cam, sữa tươi, cà phê gói', '65000', 'Cà phê là thức uống giúp chúng ta tỉnh táo, tập trung tinh thần làm việc và học tập. Cam bổ sung vitamin và các dưỡng chất giúp cơ thể khỏe mạnh và làn da tươi trẻ. Sự kết hợp thú vị giữa cafe và cam tươi sẽ mang đến cho bạn một thức uống vô cùng thơm ngon và bổ dưỡng', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/cafe-cam.jpg'),
   ('2', 'CAFE CAM', 'L', 'Cà phê bột quế, cam, sữa tươi, cà phê gói', '75000', 'Cà phê là thức uống giúp chúng ta tỉnh táo, tập trung tinh thần làm việc và học tập. Cam bổ sung vitamin và các dưỡng chất giúp cơ thể khỏe mạnh và làn da tươi trẻ. Sự kết hợp thú vị giữa cafe và cam tươi sẽ mang đến cho bạn một thức uống vô cùng thơm ngon và bổ dưỡng', 'ĐANG KINH DOANH','/htdocs-update/assert/cafevn/cafe-cam.jpg'),
   
   ('3', 'AMERICANO', 'M', 'Cà phê bột và sữa', '60000', 'Americano là một phong cách cà phê chuẩn bị bằng cách thêm nước nóng vào espresso, điều này làm cà phê có độ đậm tương tự, nhưng hương vị lại khác, giống cà phê phin', 'ĐANG KINH DOANH','/htdocs-update/assert/cafemy/americano.jpg'),
   ('3', 'AMERICANO', 'L', 'Cà phê bột và sữa', '75000', 'Americano là một phong cách cà phê chuẩn bị bằng cách thêm nước nóng vào espresso, điều này làm cà phê có độ đậm tương tự, nhưng hương vị lại khác, giống cà phê phin', 'ĐANG KINH DOANH','/htdocs-update/assert/cafemy/americano.jpg'),
   ('3', 'ESPRESSO', 'M', 'Cà phê bột và sữa', '80000', 'Espresso là một phương pháp pha cà phê có nguồn gốc từ Ý, trong đó một lượng nhỏ nước sôi gần như bị đè dưới áp lực qua hạt cà phê nghiền', 'ĐANG KINH DOANH','/htdocs-update/assert/cafemy/espresso.jpg'),
   ('3', 'ESPRESSO', 'L', 'Cà phê bột và sữa', '65000', 'Espresso là một phương pháp pha cà phê có nguồn gốc từ Ý, trong đó một lượng nhỏ nước sôi gần như bị đè dưới áp lực qua hạt cà phê nghiền', 'ĐANG KINH DOANH','/htdocs-update/assert/cafemy/espresso.jpg'),
   ('3', 'CAPUCHINO', 'M', 'Cà phê bột và sữa', '65000', 'cappuccino bao gồm ba phần đều nhau: cà phê espresso pha với một lượng nước gấp đôi (espresso lungo), sữa nóng và sữa sủi bọt. Để hoàn thiện khẩu vị, người ta thường rải lên trên tách cà phê cappuccino một ít bột ca cao và/hay bột quế', 'ĐANG KINH DOANH','/htdocs-update/assert/cafemy/capuchino.jpg'),
   ('3', 'CAPUCHINO', 'L', 'Cà phê bột và sữa', '80000', 'cappuccino bao gồm ba phần đều nhau: cà phê espresso pha với một lượng nước gấp đôi (espresso lungo), sữa nóng và sữa sủi bọt. Để hoàn thiện khẩu vị, người ta thường rải lên trên tách cà phê cappuccino một ít bột ca cao và/hay bột quế', 'ĐANG KINH DOANH','/htdocs-update/assert/cafemy/capuchino.jpg'),
   
   
   ('1', 'TRÀ SỮA CHÂN TRÂU ĐƯỜNG ĐEN', 'M', 'Sữa tươi, chân trâu đường đen và hồng trà', '50000', 'Thức uống anh em với họ nhà trà sữa nhưng sữa tươi trân châu đường đen có thành phần mới lạ, khác biệt so với trà sữa truyền thống, đó là sự kết hợp giữa sữa tươi thanh trùng không đường và viên trân châu thơm đậm vị syrup đường đen.', 'ĐANG KINH DOANH','/htdocs-update/assert/trasua/duongden.png'),
   ('1', 'TRÀ SỮA CHÂN TRÂU ĐƯỜNG ĐEN', 'L', 'Sữa tươi, chân trâu đường đen và hồng trà', '65000', 'Thức uống anh em với họ nhà trà sữa nhưng sữa tươi trân châu đường đen có thành phần mới lạ, khác biệt so với trà sữa truyền thống, đó là sự kết hợp giữa sữa tươi thanh trùng không đường và viên trân châu thơm đậm vị syrup đường đen.', 'ĐANG KINH DOANH','/htdocs-update/assert/trasua/duongden.png'),
   ('1', 'TRÀ SỮA MATCHA', 'M', 'Sữa tươi, chân trâu và bột Matcha', '50000', 'Trà sữa matcha thích hợp dành cho các bạn muốn một nước ngon lành nhưng không khiến bạn tăng cân và lại tốt cho da', 'ĐANG KINH DOANH','/htdocs-update/assert/trasua/matcha.jpg'),
   ('1', 'TRÀ SỮA MATCHA', 'L', 'Sữa tươi, chân trâu và bột Matcha', '65000', 'Trà sữa matcha thích hợp dành cho các bạn muốn một nước ngon lành nhưng không khiến bạn tăng cân và lại tốt cho da', 'ĐANG KINH DOANH','/htdocs-update/assert/trasua/matcha.jpg'),
   ('1', 'TRÀ SỮA OLONG', 'M', 'Sữa tươi, chân trâu và syrup Olong', '50000', 'thức uống này là hương vị đậm đà hơn. Ngay cả vị chát nhẹ ở đầu lưỡi cũng khiến người ta mê mẩn. Vị ngọt hậu phía dưới cuống họng càng lắng đọng dư vị của đồ uống cao cấp.', 'ĐANG KINH DOANH','/htdocs-update/assert/trasua/olong.jpg'),
   ('1', 'TRÀ SỮA OLONG', 'L', 'Sữa tươi, chân trâu và syrup Olong', '65000', 'thức uống này là hương vị đậm đà hơn. Ngay cả vị chát nhẹ ở đầu lưỡi cũng khiến người ta mê mẩn. Vị ngọt hậu phía dưới cuống họng càng lắng đọng dư vị của đồ uống cao cấp.', 'ĐANG KINH DOANH','/htdocs-update/assert/trasua/olong.jpg'),
   ('1', 'TRÀ ĐÀO', 'M', 'hồng trà, nước đào ngâm, thạch đào ngâm', '50000', 'đậm mùi trà nhưng không quá ngọt, dành cho những người thích uống vị đậm','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tradao.jpg'),
   ('1', 'TRÀ ĐÀO', 'L', 'hồng trà, nước đào ngâm, thạch đào ngâm', '60000', 'đậm mùi trà nhưng không quá ngọt, dành cho những người thích uống vị đậm','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tradao.jpg'),
   ('1', 'TRÀ SỮA TRUYỀN THỐNG', 'M', 'Sữa tươi, chân trâu, pudding và thạch phô mai', '50000', 'vị ngọt đậm, độ béo cao, và nhiều topping','ĐANG KINH DOANH','/htdocs-update/assert/trasua/truyen-thong.jpg'),
   ('1', 'TRÀ SỮA TRUYỀN THỐNG', 'L', 'Sữa tươi, chân trâu, pudding và thạch phô mai', '60000', 'vị ngọt đậm, độ béo cao, và nhiều topping','ĐANG KINH DOANH','/htdocs-update/assert/trasua/truyen-thong.jpg'),
   ('1', 'TRÀ SỮA HOA ĐẬU BIẾC', 'M', 'nước cốt của hoa đậu biếc, hạt thuỷ tinh', '50000', 'vị ngọt thanh, thơm mùi hoa đậu biết và có màu sắc ánh xanh ','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tra-sua-dau-biet.jpg'),
   ('1', 'TRÀ SỮA HOA ĐẬU BIẾC', 'L', 'nước cốt của hoa đậu biếc, hạt thuỷ tinh', '60000', 'vị ngọt thanh, thơm mùi hoa đậu biết và có màu sắc ánh xanh ','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tra-sua-dau-biet.jpg'),
   ('1', 'TRÀ SEN', 'M', 'hồng trà, hạt sen, pudding và hạt củ năng', '50000', 'vị ngọt thanh, hạt sen béo ngọt, pudding và củ năng hoà huyện','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tra-sen-vang.jpg'),
   ('1', 'TRÀ SEN', 'L', 'hồng trà, hạt sen, pudding và hạt củ năng', '60000', 'vị ngọt thanh, hạt sen béo ngọt, pudding và củ năng hoà huyện','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tra-sen-vang.jpg'),
   ('1', 'TRÀ VÃI', 'M', 'hồng trà, vãi lấy hạt, nước vãi', '50000', 'vị ngọt thanh, vãi mọng nước','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tra-vai.jpg'),
   ('1', 'TRÀ VÃI', 'L', 'hồng trà, vãi lấy hạt, nước vãi', '60000', 'vị ngọt thanh, vãi mọng nước','ĐANG KINH DOANH','/htdocs-update/assert/trasua/tra-vai.jpg');
   
   
   
