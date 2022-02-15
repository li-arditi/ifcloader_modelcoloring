
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href = "../css/metro-all.min.css" title="metro" />
		<script src="../js/jquery.min.3.5.1.js"></script>
		<!-- <script src="../js/metro.min.js"></script> -->
		<title>Document</title>
	</head>
	<body style="">
	<table>
		<tr>
			<td style="width: 50%; padding:10px; vertical-align:top">
				<div style="position:relative">
					<div>
						<input type="file" name="load" id="file-input" />
					</div>
					<div style="padding: 5px">
						<table>
							<tr>
								<td><button class="green" onclick="FilterModel('Green')"> Green </button></td>
								<td id='greenCount'> # </td>
							</tr>
							<tr>
								<td><button class="red"onclick="FilterModel('Red')"> Red </button></td>
								<td id='redCount'> # </td>
							</tr>
							<tr>
								<td><button class="blue" onclick="FilterModel('Blue')"> Blue </button></td>
								<td id='blueCount'> # </td>
							</tr>
							<tr>
								<td><button class="grey"onclick="FilterModel('Grey')"> Grey </button></td>
								<td id='greyCount'> # </td>
							</tr>
						</table>
					</div>
					
				</div>
			</td>
			<td style="width: 50%;">
				<div style="position:relative">
					<canvas id="three-canvas" style=""></canvas>
				</div>
			</td>
		<tr>
	</table>
  </body>
  
</html>

<style>
	td{
		padding:5px;
	}

	.green{
		background-color: green;
		border: none;
	}
	.red{
		background-color: red;
		border: none;
	}
	.blue{
		background-color: blue;
		border: none;
	}
	.grey{
		background-color: grey;
		border: none;
	}

</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.js"></script>

<script type="text/javascript">
	// key:random string to represent name of element, 
	// value: color to represent attribute of element
	var testData = {
		"2facdd1d-1425-4526-9445-bc5e2ae8d037": "Green",
		"626a8ab8-a12a-4eef-ad09-f8416a9ce27f": "Blue",
		"b6b41ae0-da40-4770-8345-9411a09c77c3": "Green",
		"26d37511-1d9d-47db-824a-5159dbe29c56": "Grey",
		"5b897d06-278b-4b8c-b9ed-c3a30b1648fb": "Green",
		"922c9fd1-34ef-4e31-a520-db015b8372b4": "Green",
		"a14e8ace-6257-4154-bf4d-698d6f6a186d": "Red",
		"2bb982ac-ca36-4a29-837c-b231062ca953": "Green",
		"f2fd181a-4de9-43e6-98af-0ace8ffeee16": "Blue",
		"c5054132-fcf1-43f2-82ff-a3823776733a": "Blue",
		"b6512cb6-e0bf-4b52-9f09-8656d93f65d0": "Grey",
		"6f57161b-4c1e-4a8e-ad99-6f5978adef7b": "Blue",
		"3b8855f0-17ba-453c-a6c9-3c30ce2a3bfd": "Grey",
		"65a4b402-8952-49d7-953a-f1d602d6d094": "Green",
		"e0a8f980-7b27-422d-ab6e-8d2e59c94b30": "Green",
		"d7bbd33d-3cc7-4e9f-8eec-2a7c7d565ece": "Green",
		"be9082e2-7205-429c-849a-6b6f6b3f4a5b": "Blue",
		"5963eb97-0c88-482a-b81c-54439808ee3e": "Green",
		"d3945b5c-149e-4c1f-90f1-72896dd18c50": "Green",
		"8dd77530-bc85-449d-9846-ddc5e36d739f": "Green",
		"70a2ce88-fe8e-4f97-a8b6-09cdaacdf01c": "Red",
		"fe7f82fc-dd7c-4390-87a1-6218f44cdabc": "Red",
		"96352fd9-2960-420f-a4c1-1b4945c79841": "Red",
		"1a116067-34a7-45d5-991c-e5870047afbc": "Green",
		"ba13ddb6-1096-4d1a-af09-574253b6bc3a": "Red",
		"d78ad7f6-c73a-49ac-9bde-5e74c1bb464e": "Red",
		"68c60c21-867f-49bc-aa15-ee13a6e0f042": "Green",
		"99b3915e-cd9b-448f-8925-f6cc6b53f403": "Green",
		"27ec7cb3-9187-4e7a-9649-24fb092039b6": "Green",
		"d102feb5-23f1-46c8-b9fc-555e2d95fad7": "Blue",
		"24714226-5a63-4c07-8aec-d2f9b5641f32": "Blue",
		"4ccc18d8-103a-4d77-bc8c-9a7956a96089": "Grey",
		"09ad01f6-b0a7-4d09-8ba9-676586d94f35": "Green",
		"b21aca10-7fee-444d-95c5-f4ead5b1500b": "Grey",
		"af921b78-25f7-4a6c-b51a-aa38b8f25fa2": "Green",
		"d4f4c481-1d2a-49fb-9cc5-376437c4cb66": "Red",
		"0e5dc891-229a-4f2b-a8c5-4094ec6599ac": "Green",
		"780259c8-9e75-49b6-a4a9-451856ffa83e": "Green",
		"1c112cfb-b848-4b2e-b6fe-875aa3219097": "Grey",
		"7b289201-98c0-432f-9787-494d370267d4": "Red",
		"9b993bca-b29f-44a1-9de9-941d0a1b7273": "Red",
		"7c722005-3903-4031-8c39-3ddd41f2d5a2": "Red",
		"dece4945-20f8-4e09-8d80-b3314d671782": "Green",
		"074ce8a9-fe13-4544-9ed6-6c3283e3c365": "Red",
		"28a3ac96-b821-407f-a6e5-3d324bf92059": "Green",
		"6f3024e9-9423-4d19-8665-3efa2ef85a45": "Grey",
		"031dd070-53be-4466-850b-9cf34c9633ea": "Red",
		"3658daab-d711-4e5d-a734-9fc3ad580140": "Green",
		"9e003703-eb75-4927-8fd4-d4476593b765": "Red",
		"005bf572-730a-4c25-84e6-9b8f77203fc1": "Red",
		"c7c9b1a6-90bc-47ce-80c8-322695bb1abf": "Blue",
		"7bbc0ee0-71a3-47b8-8357-8edb5bdbd745": "Blue",
		"64a1df81-8703-410f-a314-0f8c74f77144": "Green",
		"7d2991ac-70ea-42fc-b82c-9ce396b43df3": "Red",
		"03ac93ad-4524-40fd-823c-273b9a5bff16": "Grey",
		"ca26be51-72e1-4859-88d3-364c83cf59cd": "Green",
		"ad75fa50-f7c1-44fc-82a5-e695f44890a8": "Green",
		"163f3cab-e82c-48a5-a10a-3c1ce97cf78c": "Blue",
		"ee0e9b59-7913-436d-a0d3-f0ddc93d784c": "Red",
		"c245b6b9-df73-4e1f-a5ea-b431bf187da3": "Green",
		"04ee67ac-f11b-4822-a330-c8991eb69827": "Green",
		"b2dfb926-cdf9-42c2-b0eb-210ddec828dc": "Green",
		"74238baf-7287-43de-ac07-57cafe05f3eb": "Grey",
		"5873f3c7-db83-4920-8e86-5d4a1b44eed8": "Red",
		"c8507056-51f9-4b18-a649-b71a453612f7": "Blue",
		"202f3afd-80f2-407b-a05b-75d19ce182da": "Grey",
		"b0ec7fbb-82fc-4482-9be3-65d8e447974b": "Green",
		"50e0cb3e-fcf0-4f84-85ce-a13e1d797975": "Grey",
		"873fec8b-3cdc-4092-9062-45315da4e5cb": "Grey",
		"a2f36403-9fb7-4f98-b5aa-462dff492026": "Green",
		"f258b3d5-afc0-46d6-805c-b13b73e0019c": "Green",
		"2ac1436a-9200-4f67-8b87-8f2a645ff424": "Red",
		"45999e4b-c5da-4a4b-9df0-1e164070d2d6": "Red",
		"d08dabe5-9e74-4502-af54-7e33217ef838": "Grey",
		"c2cb5071-17dd-418d-91db-13766a89c8c8": "Blue",
		"d9572336-35ac-44b7-a0e1-f2489f39e4dd": "Green",
		"16c741e8-880c-49e2-9b7b-9627de8a67fe": "Red",
		"afe645b3-977a-410e-b4cc-47fb48a63253": "Red",
		"fe33b0ee-bc6c-4f77-a6d9-d08440b0309b": "Grey",
		"95a6b502-cbed-42d1-add9-2b8010ddfdef": "Green",
		"64c5de61-2287-46f7-9b20-a9b63254e733": "Green",
		"df2fdd47-0af0-4788-a76c-7b0e9d0d7e70": "Red",
		"e69797bb-d64e-4139-9e7f-78729ce9d649": "Green",
		"500bfea9-6607-4fc3-b27e-a355369d0de4": "Blue",
		"b079ccf6-bef3-4790-995a-cbeb374963e7": "Blue",
		"4098bb69-82f2-49f1-a00c-6fa052b8a526": "Red",
		"b4da7446-c7de-47ac-ba8d-cc39c4cd4bf9": "Blue",
		"0ee7919b-466c-4932-9b32-fbf3c8e4d25b": "Green",
		"3bf03ac1-eff3-4700-8887-284313a7a4ca": "Green",
		"3f1b8726-e30d-43e3-bb00-3409dd9a8aee": "Blue",
		"5fccc98c-306a-4d75-a826-e57900fb70d3": "Green",
		"90bd66af-1461-49c6-8327-ab9c628758dc": "Green",
		"37fa2969-c32e-4719-b7c6-c1ed2ad1d0f7": "Red",
		"df73e2b7-f915-4284-bd24-df91c8504406": "Red",
		"235faff3-67a1-4705-b28b-8aa159dfc2a4": "Green",
		"2e8ffe3b-47d6-4d67-88c9-66436be3071c": "Green",
		"0f548ad5-440a-4706-a700-de23388a077c": "Grey",
		"730cdf7b-d6e1-4905-8846-6e9f194c113b": "Green",
		"22a22a41-f542-4c21-a3e0-6ad05f824f5d": "Blue",
		"a8ab068a-8061-4b93-9699-6e16f0d6eee9": "Green",
		"353c9422-b435-44cb-a653-e4697f399e50": "Red",
		"124e6a5a-af4d-4934-9cd8-cd446362a195": "Green",
		"d9e39582-e6f0-4731-a0e0-cdd5bc979dad": "Blue",
		"15196621-bb24-4547-841c-b482a495f6ab": "Green",
		"6618d315-f707-47a5-8927-22aa8ef402eb": "Green",
		"675af664-acf4-4d67-9910-899a24e7bba0": "Green",
		"fb9ce3c6-85ae-41da-b8b7-2be5c1aa5b1a": "Blue",
		"a1c8e8ad-a308-4fef-abcd-b4fae8ef2cb7": "Green",
		"c560735a-1fc6-4dc8-959e-600159fe37be": "Green",
		"a8d300d3-c3d4-40ba-8c60-0d5b1d7846ae": "Blue",
		"87b8c612-30b5-4993-90f3-bde1948200a0": "Blue",
		"7cf3bc46-1b42-42d5-b472-784c4e6235f6": "Red",
		"5cc9e182-5ee5-4bca-a6dc-a93350bf803f": "Blue",
		"98bfd3a7-9092-40cb-ad5c-a057bc3d26b2": "Green",
		"23d6b714-4d64-41a5-b510-0b9f52c1c462": "Green",
		"97a671fc-a2a6-466d-960e-8f195c8d346c": "Grey",
		"64acb67c-6e9f-4ebe-b591-5799263d6b65": "Green",
		"bf49bbbd-2d46-4cdc-a041-3eadc0ee77d8": "Blue",
		"af5a6e85-acf6-4a59-8043-03cef6a67e53": "Green",
		"b5f8b7e2-4d94-4125-933b-0493cb63c272": "Green",
		"720f02de-b5f3-4d66-8c69-6fa05fd95806": "Green",
		"c4bcbf11-0d79-454d-9d2f-0f186382b1a0": "Green",
		"9fea21fd-134e-4048-8eff-99d43b0c9b06": "Green",
		"095fdf43-fa42-435a-ae7b-05f33f800922": "Green",
		"27980b74-2a48-4998-9839-dab265446f36": "Red",
		"fc795507-e998-4a03-9c63-edd0bdc08bc4": "Blue",
		"0486ab8c-8843-4c0c-80bf-87138169dae1": "Green",
		"7a5fa361-2a61-4d38-82d2-eb932357be08": "Red",
		"4489c976-d808-459b-9661-d91d995aef6b": "Green",
		"037d3ff7-7d8a-4a44-a6ae-be0f5362d615": "Red",
		"2a4d1967-7d73-450c-ad84-119e5d924d18": "Red",
		"2005c841-86cf-4fcd-b02c-0327d342f708": "Red",
		"e1588af4-9bb5-4e24-9eaa-d6eadd405d39": "Blue",
		"1afc1b46-8030-45af-8ac1-f7ae7693370d": "Green",
		"0ea745bc-4316-4bf2-831d-212ca196e7df": "Green",
		"e9528667-ec90-472f-8724-d68f44b2dc1b": "Green",
		"beb557e3-d1b9-42ca-8689-1f9f7959969e": "Red",
		"1a200d48-f359-4d18-a803-7edacb3a6f4d": "Blue",
		"221af680-38ff-4381-8296-06317e599866": "Grey",
		"3a310df6-26a6-4f41-b7a3-58d60fb97564": "Green",
		"ed67060e-e1d0-4ed2-a860-021d49e7af66": "Green",
		"3334badb-7f02-4773-8b9e-912b57496e54": "Green",
		"1176e5be-511c-4573-867c-e7b15b22278f": "Blue",
		"ab4b521d-783e-436f-91ec-707e22a4ffd4": "Green",
		"81c576c7-76a1-4ae7-8fe1-98f84b4c064d": "Red",
		"3b8d785c-3eed-4d17-b9c8-91bfa78e6802": "Red",
		"da589751-f4a7-477d-a95c-c284933fae9e": "Green",
		"d15eb331-3ccc-45bb-9d6c-63023a323248": "Green",
		"3f1a984e-794b-4881-93fc-77f1d55edfbf": "Red",
		"8c0159af-20b0-4407-aafe-12811206c6dd": "Green",
		"3f067757-e331-4b83-a7ab-2712cf926305": "Green",
		"b545e41d-6def-435c-9845-5ac59874d365": "Green",
		"7d892432-9efd-4a36-8367-0eb59b495e6f": "Green",
		"6e118f34-cadd-4a1b-be15-89ae816c4e2d": "Blue",
		"deefbeef-e3b0-495e-82ad-b8998ea03e8f": "Green",
		"8a91bfaa-1307-4530-8442-77e072b30679": "Red",
		"b15a161d-ba23-4a99-ae97-73df61f5ef94": "Red",
		"b5c4a690-5b55-4f3e-8bf1-17d16fff81ff": "Green",
		"1f06adac-19e0-4429-b7d5-195f6d58db3d": "Grey",
		"a84d801b-f375-4192-beef-0032b3e52b69": "Green",
		"f07b6dba-0204-426b-bad3-bf6109541867": "Red",
		"8e6741d8-6002-437c-ae81-a39c22cff1a1": "Grey",
		"2a1b7899-2301-4300-b8ba-1fd955e75a66": "Red",
		"12fa5025-2f4a-4717-b22b-86f68d0ea6a4": "Green",
		"9656d32e-0dd1-4659-9adc-a719f1db1fef": "Red",
		"4f5bb68b-b41c-4917-b350-45ce2a091fb4": "Red",
		"b029fc34-aaa4-4f19-8bcf-f5073cd412d9": "Grey",
		"8294f82e-895a-4727-bc58-241bb2f16fab": "Green",
		"d652b0d2-04a7-4e30-994c-29faaecdb187": "Green",
		"023c5b9b-ccf7-4ce5-90eb-17d606def307": "Red",
		"4a3de2ab-e00b-4c9e-98ed-721e8368ad25": "Green",
		"8554803c-0cfa-401b-853b-590ea330089c": "Green",
		"4aaf2139-5b6b-4bd4-ad19-df87dd931e9f": "Green",
		"883cceb5-da4c-45e5-8844-cc1f90a155d2": "Red",
		"54550437-f098-4530-af2a-7bf5fc31e5d9": "Green",
		"9494c17d-58c3-461b-a1d9-51f140b308d8": "Grey",
		"10e68d96-d510-48a5-9bd9-12dce94930b7": "Grey",
		"9e909ebc-cb91-46f2-a322-7af02ccc928d": "Red",
		"6c2c2251-aff4-4b7c-a147-a2f9403ea847": "Green",
		"31841d8f-24d3-4364-a557-fa6ce0ce314c": "Blue",
		"7a909156-33fa-4aec-b2ab-c35e021ecc56": "Blue",
		"cb506b7c-c9e7-4862-a015-9ca6b5217b9e": "Red",
		"33b98620-3fda-45f4-9e66-0603b764e7cd": "Green",
		"4f888a2a-163d-4a8c-b86d-ada87f30020a": "Green",
		"15dbab2f-e7e9-4f2b-a6ba-bbcfde3faa99": "Green",
		"622b7286-13c5-4c5d-ab1e-b0f09ea1198f": "Green",
		"01ef7890-ae27-4d12-89da-68932df76f77": "Red",
		"b4f4a98e-f97d-4f8d-96cc-87a061a9bd2c": "Blue",
		"9e088f29-b265-499b-8d2b-b527856fdbeb": "Red",
		"f1a21b66-fcdd-4ab5-8b49-4096e877fad3": "Grey",
		"ad52cc3b-f24c-4a9e-ac96-4a5acac61463": "Red",
		"1b06548a-cc4f-41db-a56c-be2abc024ab3": "Green",
		"f16ce3f7-5578-48b1-9ac5-f7b67560cc7d": "Grey",
		"6d6f75c8-8d7f-4165-a54a-3995b69b064b": "Green",
		"412a5623-12dd-4cff-931f-ce31ad897038": "Red",
		"aeddf116-7626-464f-a5e3-1a8787a46171": "Green",
		"c1dd371d-a65b-442c-9255-e262c3e1aa7c": "Green",
		"e91d7439-0c78-474a-9ecb-112d8ef87bc5": "Blue",
		"5033c8d4-3ec0-4980-86d5-9daed1910ef8": "Red",
		"0fb0c5be-5999-46d4-8c1c-93507d7ee489": "Red",
		"e293dbd6-3d3b-4ba5-a596-e567ece88b9d": "Blue",
		"c38f9312-5d03-428d-b510-5206953f1b6f": "Grey",
		"b97af606-2279-43d7-9f21-a565d554746e": "Red",
		"5a6d605d-02c3-4b4c-9079-35b06e44ba92": "Red",
		"d5713d38-75c8-45f0-99b8-7f4055bd54a7": "Green",
		"127b8ddd-769a-4c4b-8556-cb15c4ee28ec": "Green",
		"151a44b8-646b-49dc-8990-508c908c7e0c": "Red",
		"82281427-f1c5-4af0-aebe-13c76aaac405": "Green",
		"7a4beb16-ccf4-4f6c-be64-38f633a9e3d3": "Blue",
		"03116cee-ed3a-4785-a450-ed8d39a4bd82": "Blue",
		"4731e81a-beea-48eb-ab06-44f209ac5733": "Blue",
		"e261f2f2-e5e1-4dec-9d0c-707b7248e004": "Blue",
		"a03732d3-56dd-4cbb-9b3f-c7939ba642e3": "Red",
		"b77b5ace-a3f9-452a-80a6-d40cb56faf97": "Green",
		"0149dfc5-3f21-4940-89e6-020fdeb7c33d": "Grey",
		"36d76bd4-8943-40be-b91e-d65ae8b78f3d": "Blue",
		"74a3f4d0-be95-4d06-8ee3-9b65fae3d54b": "Blue",
		"1154210d-c25a-4fb6-8312-c9345f8408ec": "Green",
		"bdd22ff4-b9d8-475e-9cc8-6249502dba5a": "Red",
		"9b0c5beb-8c49-4903-ab8b-eea069f8e3e8": "Green",
		"f7c233b9-5307-4407-8d24-78ec10dc4a64": "Green",
		"9c94ab68-972e-4834-9cf2-7d93474317a3": "Green",
		"004f3c20-6ecb-4128-b4f6-8b30c01df9e4": "Grey",
		"3e3bdb26-3510-4dfb-bcbb-d22e5faba17e": "Green",
		"a39b2940-6e77-4fd0-bcd0-8cf0362655b6": "Green",
		"dae43fe3-579c-4c22-a51d-b2f363deffae": "Red",
		"05cd5e6c-7046-4b50-9976-d1c8b442b8cb": "Blue",
		"2e61d547-a86a-4b5f-8b25-0ba1fd9fe9fd": "Green",
		"61658127-2227-49a9-bc14-1a9306c12f23": "Green",
		"2156d2be-030f-4b93-9e31-5711f595dbc2": "Blue",
		"977ec61f-4931-44e1-a4c4-f189d5e8204f": "Green",
		"464cc939-f3fb-40aa-8bb9-80f9507a2b6d": "Red",
		"826bf456-3fab-48e0-a14f-0f92604c3cd8": "Grey",
		"146a8db5-2a11-46f8-b7bb-10cf3faa71f5": "Green",
		"e1c7708b-8c1c-44c2-9534-1fca7e387ed3": "Blue",
		"17735608-1a14-44ab-afe2-767ea1a99489": "Blue",
		"604c4f3a-bb26-4a12-ba24-d39dd0f61969": "Green",
		"e14c0a9e-a1d2-4f18-afed-ebe693a346ec": "Grey",
		"97549c43-d423-4348-a809-9f011fc12a57": "Green",
		"e7e2c317-d882-4b66-8bba-01b38212a720": "Green",
		"2f0a62d3-e438-4a6e-bee8-524e39b4db97": "Red",
		"d8839922-b5e7-4d35-85c4-ef34f3df1716": "Grey",
		"a31645e6-c3d6-44d6-8dae-72a1acd78f26": "Grey",
		"f0caa2ac-4352-493d-892b-94c458856d10": "Green",
		"53d2c3a9-2720-40d3-b2fc-d41565229837": "Green",
		"3416628c-1d86-468a-bd3c-cb91c95d1902": "Red",
		"aec114ed-e579-49dd-b12a-853270d85770": "Blue",
		"f572e063-3db8-464a-9f30-808ba1655ea3": "Green",
		"2dacd551-5781-4821-9c9d-73ce2cf88e8a": "Red",
		"03736df9-edf2-413b-9e39-a8fe25851131": "Blue",
		"18fca253-5c0c-4338-b42d-eb8d735d5011": "Blue",
		"63ad5d96-dc6f-4d41-823f-0304867d6e41": "Green",
		"a0a852b0-5664-4401-840b-e9bbfa3f739c": "Green",
		"7a2fc81f-27e5-4c68-8a89-5009c9298185": "Red",
		"47ae4133-5d6d-4582-b5ee-e17260e922f2": "Green",
		"0d4a7503-ec27-4c18-8072-b9d6d8107e77": "Green",
		"2a041025-1543-4981-8fdf-9692dcb6e230": "Red",
		"a398626f-aea9-404a-aa7d-d12c5f8f1f39": "Green",
		"8b827fe8-1a82-478f-ba6f-8a21ba8bcfff": "Grey",
		"135645b8-7cee-4273-a455-74b6cd4cb152": "Red",
		"394829d3-2398-4478-afad-05ef80ca1db2": "Green",
		"af3bd355-34b4-4c85-8071-92f422d5e2c6": "Grey",
		"82d0eeed-a6f2-49f1-a8be-98a7bf1a95f2": "Red",
		"f67e9760-f54f-46a7-906d-bee4e6fd9aa2": "Green",
		"f5f97d02-f071-49ae-b939-9a26e16e40a8": "Green",
		"493df111-fb27-4993-9019-2cdfd2b00d70": "Red",
		"298de126-0cc4-4ae5-a457-3c82b95ce638": "Green",
		"bc15a48b-ab41-45a3-a62e-021712f780ee": "Red",
		"c88f4508-1ea5-4c10-9db7-98cd636125ec": "Green",
		"9bd4d23b-4ad6-44a2-80fe-3534a7ec184d": "Blue",
		"92c7d3f7-fcdb-4d3a-9001-591ed0da9e79": "Green",
		"63fd8441-670e-48d0-aeb2-99386602f9a3": "Grey",
		"4abb6f22-17d8-4ed7-a516-7cef3fd25070": "Red",
		"a721bb20-2bd9-453b-9eee-5e85a170da28": "Blue",
		"a8c7c360-d33f-4b9f-8260-10ef84c89113": "Green",
		"41ce233b-0f7b-4c02-9b37-94e1dd6ebce0": "Blue",
		"5aeb9b0b-28fa-4514-8529-c4a2cc33fb5e": "Red",
		"3bff3d8a-4e84-428b-8cc1-0ff0efbe398a": "Green",
		"c574dc11-2da2-47e5-9845-93604bb7c35c": "Red",
		"455a6349-7e85-4357-8a2d-0a77df6c45a1": "Blue",
		"8d62ab94-fcb6-457c-8e29-767354c6b95b": "Red",
		"6b245576-6cc1-4f56-8f56-8ae3bed82f11": "Blue",
		"fa72586c-f871-4b3a-8144-38e74c400525": "Red",
		"53a97643-282b-4896-bc59-af28f86089cf": "Grey",
		"1d59c88f-12fb-4b0a-a62a-455699e1f164": "Green",
		"26418b2e-f66a-4b50-80ab-b1436d32b078": "Red",
		"32ea7462-1342-4ed8-a969-8f6394d7fcbf": "Red",
		"73aa0a94-a1f9-4bae-87b1-a6c882ed8f5d": "Red",
		"55686a77-7aea-470d-a5c5-7512b43aa41b": "Green",
		"93d43b91-b6f2-46db-834d-176026125777": "Blue",
		"2192d30f-04d1-4c1e-8604-6029b1f1b907": "Red",
		"08dd85c0-a0d8-4ff2-8f76-277d37bbde8e": "Green",
		"96456883-0cc5-4399-90e3-245ba72bcac4": "Red",
		"ef4efdcf-7bc8-40e7-b7cb-de01e3d8b8a6": "Red",
		"f13c4953-7ae1-4dea-b777-813b977f572a": "Red",
		"13ea6d51-4207-4053-be78-2c6fee5aa1cc": "Red",
		"7afeb09d-62e8-4273-9567-d3ccaf82a26d": "Green",
		"db8161a6-478e-4cc3-b086-a98167e516f7": "Grey",
		"3bcb932d-4eb4-4bab-a6bf-a7c894940752": "Grey",
		"7c78a875-6f5d-43d2-8ac7-26b59383f5c8": "Green",
		"8cc724cc-489b-4029-b841-7b174356569e": "Green",
		"4f16fe48-19f4-4fb4-8a0b-aac3bcea020b": "Grey",
		"c5679802-0fdd-4614-916a-e34649c6d013": "Blue",
		"2fa4160b-e788-4e99-af89-5055ae3b9e71": "Red",
		"ff73e28d-1842-42e1-bac8-c03938d12f7a": "Red",
		"94208e04-a63b-44e2-81bb-591b86d59bda": "Green",
		"c7fa9c69-af4d-4033-8d16-dcbdfdf11624": "Blue",
		"191bc881-45fb-4381-9e50-9613203664d2": "Green",
		"70903c2a-5883-4556-9f78-53d97c3fcdba": "Red",
		"28c0e73d-e264-48e4-af35-06a4bbd3283b": "Blue",
		"4e8998df-7a39-40ad-8782-1cc91b479e07": "Green",
		"cfee6709-2d29-4fe4-8766-08b14031f2d5": "Grey",
		"4d9f6cfb-6224-457c-9ec5-8fc55df2a593": "Blue",
		"df076648-f9aa-4009-915f-391fe90f6175": "Green",
		"d6e5f65c-589d-49b9-81cc-b711538ddbba": "Green",
		"a07e495e-560d-4bfd-aaf4-27f4d84a60fb": "Green",
		"be9a8f81-26d2-4125-be4a-a4f2389ae0f6": "Red",
		"d7f1c99a-3b20-42e5-86ba-8d1a26714e76": "Blue",
		"3ed851dc-f466-4007-bb3a-ba9a2167a417": "Green",
		"95f53643-0d9f-446d-98d3-47a14be1c249": "Red",
		"af7a3bf5-4c7c-4b96-a64c-301efaec1599": "Green",
		"ce7435c0-318b-4dcb-ad64-996f4da767e9": "Green",
		"ad24a40d-c7f6-446d-b4f3-0c74064bbb53": "Green",
		"31ebe5bb-5db7-4867-b0b4-edbdfaae8891": "Red",
		"9aa1f077-25f8-469c-858b-f9d73bee2c13": "Red",
		"ab7bebd0-8c9a-4371-9829-f5fa381892e6": "Grey",
		"9c27bdf6-fd2b-4f4e-9ea1-7a6eb80b7b18": "Red",
		"c9697ac6-ec50-4ff4-bb71-507f0c0e738f": "Green",
		"699973ff-4e7c-4e4f-be87-d6c4fb896bc0": "Blue",
		"ae3cdaec-49d5-4ff9-aaa3-9ba26f4d0fb1": "Red",
		"7be5973f-071f-4b5b-8742-09d4a69312e7": "Green",
		"1a04222e-a8e3-4e1b-a8fc-15263bd5ad71": "Red",
		"a8653465-9ace-4c35-b0e0-0f6bdfc4765f": "Grey",
		"5f4e1c08-beef-4981-adfe-e1f7d5f5c3ea": "Red",
		"e1c9c6e6-9272-41d2-a555-6e1cabf4b98a": "Green",
		"9cfa6cdf-6b3f-4a32-9774-685652e5839b": "Red",
		"55ad897f-d0f1-47c1-8890-6f821d3c7173": "Red",
		"7b480a47-426d-4be7-a0cd-783195df3e23": "Red",
		"60031680-751d-416a-a18c-da11be831625": "Green",
		"da82d560-e9b8-4231-b05d-62a4140841f8": "Red",
		"d7308b0c-37e6-4fc0-ad8d-051ed1c3a3bc": "Grey",
		"5d2a84d0-7f41-4d39-9ea1-a8a683e2b047": "Blue",
		"d91bdc67-7601-4e3e-abb4-f7ec015a2cdf": "Red",
		"f678078d-2a72-407a-8ff5-43fce8b8da1d": "Green",
		"587272d1-0ac1-4e59-aeb3-2324ae1ccd48": "Green",
		"34183f3c-218e-4e3b-98f7-b1ad610f8528": "Red",
		"1a037d41-fbc8-4b34-8116-34fd4b611a0b": "Blue",
		"e03ca457-a31f-4607-a013-4a0eceeb5180": "Red",
		"01eb6101-e8df-4d5c-bfab-35ca685ba950": "Red",
		"e4304f53-ec30-4b95-8f91-dec43b564c1c": "Green",
		"cc1ba43c-cc84-40d8-be54-ed3207df1ff6": "Blue",
		"b86f4aad-4880-4852-91d1-15d0ed03221f": "Red",
		"26134637-f6af-43a5-ad52-4b04d80ed043": "Red",
		"d71ef22b-1cd5-4dfb-a348-4a44f42d49b7": "Green",
		"d01fa2aa-ae86-48cd-beef-1137eec76836": "Green",
		"929835a0-ee9b-4b5f-aa0b-ca3ac51e45b9": "Grey",
		"cf639887-8a05-4fe6-9de8-994fcd1c5f6a": "Blue",
		"3a4a1f44-3753-408d-874c-adf2e1b69001": "Green",
		"7a006257-aea8-4215-9313-51ea2682ec02": "Blue",
		"badbdfab-4014-43b4-abaa-0c57ccf10ac0": "Red",
		"5e671f54-5b3c-430d-8c08-37ce8aa952f5": "Blue",
		"6edb8250-0404-4063-82e0-a848f8c92d36": "Green",
		"f5d387a1-5c7c-4951-8d18-0289bd63f46d": "Red",
		"c3c97f0e-7408-4d46-a10c-4b2b7efd4a25": "Red",
		"046b54a2-854c-4284-adcc-1aebe51b7458": "Red",
		"b41ff2a9-3c47-4d36-9c1b-77404740eaa1": "Green",
		"206b1748-f150-4400-b248-cb4447868cac": "Blue",
		"e9069896-8415-49e4-9675-dd058751de67": "Grey",
		"b6769595-342f-41c8-aa71-ba582c99e4f5": "Green",
		"00ebf215-c8fc-48cc-804f-9b4c4859928f": "Red",
		"5d435eb4-d4d8-405a-b45b-5779aa8f6145": "Blue",
		"e5a24c03-5a86-4479-953a-0adbfedad2af": "Red",
		"9f0f3d04-aa5f-4632-af04-4a5a433b068e": "Red",
		"836130fa-d9fd-4889-b85b-031dbf78a461": "Blue",
		"4145c7a8-d6ff-4549-8bdf-c24075fb4eac": "Red",
		"8b87b7a1-84d2-4a04-a1fa-161307f311ae": "Blue",
		"98451fb6-5523-43db-aee3-a5f57b68cc27": "Blue",
		"9bf3eaa5-45c0-4aa7-9749-df9d077ace08": "Green"
	};

	// myArray=["Green","Red","Blue","Grey","Green","Red","Green","Red","Green","Blue"];
	
	// Object.entries(testData).forEach(function(el){
	// 	var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
	// 	testData[el[0]] = randomItem;
	// });
	// console.log(testData);

	// key: expressID of element in model
	// value: random string to represent name of element
	var express_name={
		"4406": "2facdd1d-1425-4526-9445-bc5e2ae8d037",
		"4699": "626a8ab8-a12a-4eef-ad09-f8416a9ce27f",
		"6908": "b6b41ae0-da40-4770-8345-9411a09c77c3",
		"7181": "26d37511-1d9d-47db-824a-5159dbe29c56",
		"13562": "5b897d06-278b-4b8c-b9ed-c3a30b1648fb",
		"17317": "922c9fd1-34ef-4e31-a520-db015b8372b4",
		"17610": "a14e8ace-6257-4154-bf4d-698d6f6a186d",
		"20165": "2bb982ac-ca36-4a29-837c-b231062ca953",
		"23456": "f2fd181a-4de9-43e6-98af-0ace8ffeee16",
		"26801": "c5054132-fcf1-43f2-82ff-a3823776733a",
		"27074": "b6512cb6-e0bf-4b52-9f09-8656d93f65d0",
		"27347": "6f57161b-4c1e-4a8e-ad99-6f5978adef7b",
		"27620": "3b8855f0-17ba-453c-a6c9-3c30ce2a3bfd",
		"27893": "65a4b402-8952-49d7-953a-f1d602d6d094",
		"28398": "e0a8f980-7b27-422d-ab6e-8d2e59c94b30",
		"28691": "d7bbd33d-3cc7-4e9f-8eec-2a7c7d565ece",
		"28928": "be9082e2-7205-429c-849a-6b6f6b3f4a5b",
		"29807": "5963eb97-0c88-482a-b81c-54439808ee3e",
		"30080": "d3945b5c-149e-4c1f-90f1-72896dd18c50",
		"30541": "8dd77530-bc85-449d-9846-ddc5e36d739f",
		"30778": "70a2ce88-fe8e-4f97-a8b6-09cdaacdf01c",
		"34325": "fe7f82fc-dd7c-4390-87a1-6218f44cdabc",
		"34618": "96352fd9-2960-420f-a4c1-1b4945c79841",
		"34875": "1a116067-34a7-45d5-991c-e5870047afbc",
		"35112": "ba13ddb6-1096-4d1a-af09-574253b6bc3a",
		"35319": "d78ad7f6-c73a-49ac-9bde-5e74c1bb464e",
		"35592": "68c60c21-867f-49bc-aa15-ee13a6e0f042",
		"36607": "99b3915e-cd9b-448f-8925-f6cc6b53f403",
		"40530": "27ec7cb3-9187-4e7a-9649-24fb092039b6",
		"40803": "d102feb5-23f1-46c8-b9fc-555e2d95fad7",
		"42254": "24714226-5a63-4c07-8aec-d2f9b5641f32",
		"42527": "4ccc18d8-103a-4d77-bc8c-9a7956a96089",
		"42800": "09ad01f6-b0a7-4d09-8ba9-676586d94f35",
		"45289": "b21aca10-7fee-444d-95c5-f4ead5b1500b",
		"46436": "af921b78-25f7-4a6c-b51a-aa38b8f25fa2",
		"46693": "d4f4c481-1d2a-49fb-9cc5-376437c4cb66",
		"46930": "0e5dc891-229a-4f2b-a8c5-4094ec6599ac",
		"47223": "780259c8-9e75-49b6-a4a9-451856ffa83e",
		"49308": "1c112cfb-b848-4b2e-b6fe-875aa3219097",
		"49515": "7b289201-98c0-432f-9787-494d370267d4",
		"49752": "9b993bca-b29f-44a1-9de9-941d0a1b7273",
		"51573": "7c722005-3903-4031-8c39-3ddd41f2d5a2",
		"51846": "dece4945-20f8-4e09-8d80-b3314d671782",
		"52083": "074ce8a9-fe13-4544-9ed6-6c3283e3c365",
		"52320": "28a3ac96-b821-407f-a6e5-3d324bf92059",
		"52557": "6f3024e9-9423-4d19-8665-3efa2ef85a45",
		"52850": "031dd070-53be-4466-850b-9cf34c9633ea",
		"53143": "3658daab-d711-4e5d-a734-9fc3ad580140",
		"53436": "9e003703-eb75-4927-8fd4-d4476593b765",
		"53693": "005bf572-730a-4c25-84e6-9b8f77203fc1",
		"53966": "c7c9b1a6-90bc-47ce-80c8-322695bb1abf",
		"59415": "7bbc0ee0-71a3-47b8-8357-8edb5bdbd745",
		"60798": "64a1df81-8703-410f-a314-0f8c74f77144",
		"61035": "7d2991ac-70ea-42fc-b82c-9ce396b43df3",
		"63246": "03ac93ad-4524-40fd-823c-273b9a5bff16",
		"63519": "ca26be51-72e1-4859-88d3-364c83cf59cd",
		"63726": "ad75fa50-f7c1-44fc-82a5-e695f44890a8",
		"65883": "163f3cab-e82c-48a5-a10a-3c1ce97cf78c",
		"66324": "ee0e9b59-7913-436d-a0d3-f0ddc93d784c",
		"66531": "c245b6b9-df73-4e1f-a5ea-b431bf187da3",
		"66738": "04ee67ac-f11b-4822-a330-c8991eb69827",
		"68539": "b2dfb926-cdf9-42c2-b0eb-210ddec828dc",
		"68812": "74238baf-7287-43de-ac07-57cafe05f3eb",
		"69049": "5873f3c7-db83-4920-8e86-5d4a1b44eed8",
		"69256": "c8507056-51f9-4b18-a649-b71a453612f7",
		"69483": "202f3afd-80f2-407b-a05b-75d19ce182da",
		"69738": "b0ec7fbb-82fc-4482-9be3-65d8e447974b",
		"70011": "50e0cb3e-fcf0-4f84-85ce-a13e1d797975",
		"70284": "873fec8b-3cdc-4092-9062-45315da4e5cb",
		"72867": "a2f36403-9fb7-4f98-b5aa-462dff492026",
		"73140": "f258b3d5-afc0-46d6-805c-b13b73e0019c",
		"73367": "2ac1436a-9200-4f67-8b87-8f2a645ff424",
		"73640": "45999e4b-c5da-4a4b-9df0-1e164070d2d6",
		"73933": "d08dabe5-9e74-4502-af54-7e33217ef838",
		"74188": "c2cb5071-17dd-418d-91db-13766a89c8c8",
		"76963": "d9572336-35ac-44b7-a0e1-f2489f39e4dd",
		"77236": "16c741e8-880c-49e2-9b7b-9627de8a67fe",
		"77509": "afe645b3-977a-410e-b4cc-47fb48a63253",
		"79290": "fe33b0ee-bc6c-4f77-a6d9-d08440b0309b",
		"79583": "95a6b502-cbed-42d1-add9-2b8010ddfdef",
		"79820": "64c5de61-2287-46f7-9b20-a9b63254e733",
		"80113": "df2fdd47-0af0-4788-a76c-7b0e9d0d7e70",
		"81038": "e69797bb-d64e-4139-9e7f-78729ce9d649",
		"81311": "500bfea9-6607-4fc3-b27e-a355369d0de4",
		"81568": "b079ccf6-bef3-4790-995a-cbeb374963e7",
		"81825": "4098bb69-82f2-49f1-a00c-6fa052b8a526",
		"82098": "b4da7446-c7de-47ac-ba8d-cc39c4cd4bf9",
		"82371": "0ee7919b-466c-4932-9b32-fbf3c8e4d25b",
		"82608": "3bf03ac1-eff3-4700-8887-284313a7a4ca",
		"82863": "3f1b8726-e30d-43e3-bb00-3409dd9a8aee",
		"85458": "5fccc98c-306a-4d75-a826-e57900fb70d3",
		"85695": "90bd66af-1461-49c6-8327-ab9c628758dc",
		"85932": "37fa2969-c32e-4719-b7c6-c1ed2ad1d0f7",
		"86205": "df73e2b7-f915-4284-bd24-df91c8504406",
		"86478": "235faff3-67a1-4705-b28b-8aa159dfc2a4",
		"86771": "2e8ffe3b-47d6-4d67-88c9-66436be3071c",
		"86998": "0f548ad5-440a-4706-a700-de23388a077c",
		"87271": "730cdf7b-d6e1-4905-8846-6e9f194c113b",
		"87766": "22a22a41-f542-4c21-a3e0-6ad05f824f5d",
		"88039": "a8ab068a-8061-4b93-9699-6e16f0d6eee9",
		"88246": "353c9422-b435-44cb-a653-e4697f399e50",
		"88539": "124e6a5a-af4d-4934-9cd8-cd446362a195",
		"88746": "d9e39582-e6f0-4731-a0e0-cdd5bc979dad",
		"89019": "15196621-bb24-4547-841c-b482a495f6ab",
		"89256": "6618d315-f707-47a5-8927-22aa8ef402eb",
		"90125": "675af664-acf4-4d67-9910-899a24e7bba0",
		"90398": "fb9ce3c6-85ae-41da-b8b7-2be5c1aa5b1a",
		"93045": "a1c8e8ad-a308-4fef-abcd-b4fae8ef2cb7",
		"93318": "c560735a-1fc6-4dc8-959e-600159fe37be",
		"93619": "a8d300d3-c3d4-40ba-8c60-0d5b1d7846ae",
		"93832": "87b8c612-30b5-4993-90f3-bde1948200a0",
		"96639": "7cf3bc46-1b42-42d5-b472-784c4e6235f6",
		"96876": "5cc9e182-5ee5-4bca-a6dc-a93350bf803f",
		"97149": "98bfd3a7-9092-40cb-ad5c-a057bc3d26b2",
		"97364": "23d6b714-4d64-41a5-b510-0b9f52c1c462",
		"97637": "97a671fc-a2a6-466d-960e-8f195c8d346c",
		"97910": "64acb67c-6e9f-4ebe-b591-5799263d6b65",
		"98203": "bf49bbbd-2d46-4cdc-a041-3eadc0ee77d8",
		"98476": "af5a6e85-acf6-4a59-8043-03cef6a67e53",
		"98749": "b5f8b7e2-4d94-4125-933b-0493cb63c272",
		"99022": "720f02de-b5f3-4d66-8c69-6fa05fd95806",
		"99259": "c4bcbf11-0d79-454d-9d2f-0f186382b1a0",
		"99466": "9fea21fd-134e-4048-8eff-99d43b0c9b06",
		"101429": "095fdf43-fa42-435a-ae7b-05f33f800922",
		"102966": "27980b74-2a48-4998-9839-dab265446f36",
		"103193": "fc795507-e998-4a03-9c63-edd0bdc08bc4",
		"103486": "0486ab8c-8843-4c0c-80bf-87138169dae1",
		"103743": "7a5fa361-2a61-4d38-82d2-eb932357be08",
		"103980": "4489c976-d808-459b-9661-d91d995aef6b",
		"104253": "037d3ff7-7d8a-4a44-a6ae-be0f5362d615",
		"104546": "2a4d1967-7d73-450c-ad84-119e5d924d18",
		"104819": "2005c841-86cf-4fcd-b02c-0327d342f708",
		"105222": "e1588af4-9bb5-4e24-9eaa-d6eadd405d39",
		"105495": "1afc1b46-8030-45af-8ac1-f7ae7693370d",
		"105702": "0ea745bc-4316-4bf2-831d-212ca196e7df",
		"105965": "e9528667-ec90-472f-8724-d68f44b2dc1b",
		"106238": "beb557e3-d1b9-42ca-8689-1f9f7959969e",
		"106427": "1a200d48-f359-4d18-a803-7edacb3a6f4d",
		"106664": "221af680-38ff-4381-8296-06317e599866",
		"107037": "3a310df6-26a6-4f41-b7a3-58d60fb97564",
		"107274": "ed67060e-e1d0-4ed2-a860-021d49e7af66",
		"107481": "3334badb-7f02-4773-8b9e-912b57496e54",
		"107718": "1176e5be-511c-4573-867c-e7b15b22278f",
		"107925": "ab4b521d-783e-436f-91ec-707e22a4ffd4",
		"108198": "81c576c7-76a1-4ae7-8fe1-98f84b4c064d",
		"108471": "3b8d785c-3eed-4d17-b9c8-91bfa78e6802",
		"108704": "da589751-f4a7-477d-a95c-c284933fae9e",
		"108941": "d15eb331-3ccc-45bb-9d6c-63023a323248",
		"109214": "3f1a984e-794b-4881-93fc-77f1d55edfbf",
		"109487": "8c0159af-20b0-4407-aafe-12811206c6dd",
		"109744": "3f067757-e331-4b83-a7ab-2712cf926305",
		"110037": "b545e41d-6def-435c-9845-5ac59874d365",
		"110274": "7d892432-9efd-4a36-8367-0eb59b495e6f",
		"110717": "6e118f34-cadd-4a1b-be15-89ae816c4e2d",
		"110990": "deefbeef-e3b0-495e-82ad-b8998ea03e8f",
		"111263": "8a91bfaa-1307-4530-8442-77e072b30679",
		"111458": "b15a161d-ba23-4a99-ae97-73df61f5ef94",
		"111715": "b5c4a690-5b55-4f3e-8bf1-17d16fff81ff",
		"111972": "1f06adac-19e0-4429-b7d5-195f6d58db3d",
		"112891": "a84d801b-f375-4192-beef-0032b3e52b69",
		"113164": "f07b6dba-0204-426b-bad3-bf6109541867",
		"114929": "8e6741d8-6002-437c-ae81-a39c22cff1a1",
		"115136": "2a1b7899-2301-4300-b8ba-1fd955e75a66",
		"115399": "12fa5025-2f4a-4717-b22b-86f68d0ea6a4",
		"115656": "9656d32e-0dd1-4659-9adc-a719f1db1fef",
		"115893": "4f5bb68b-b41c-4917-b350-45ce2a091fb4",
		"116148": "b029fc34-aaa4-4f19-8bcf-f5073cd412d9",
		"116423": "8294f82e-895a-4727-bc58-241bb2f16fab",
		"116716": "d652b0d2-04a7-4e30-994c-29faaecdb187",
		"119509": "023c5b9b-ccf7-4ce5-90eb-17d606def307",
		"122416": "4a3de2ab-e00b-4c9e-98ed-721e8368ad25",
		"122689": "8554803c-0cfa-401b-853b-590ea330089c",
		"122962": "4aaf2139-5b6b-4bd4-ad19-df87dd931e9f",
		"124743": "883cceb5-da4c-45e5-8844-cc1f90a155d2",
		"125000": "54550437-f098-4530-af2a-7bf5fc31e5d9",
		"125255": "9494c17d-58c3-461b-a1d9-51f140b308d8",
		"125528": "10e68d96-d510-48a5-9bd9-12dce94930b7",
		"125735": "9e909ebc-cb91-46f2-a322-7af02ccc928d",
		"126028": "6c2c2251-aff4-4b7c-a147-a2f9403ea847",
		"126303": "31841d8f-24d3-4364-a557-fa6ce0ce314c",
		"126510": "7a909156-33fa-4aec-b2ab-c35e021ecc56",
		"126747": "cb506b7c-c9e7-4862-a015-9ca6b5217b9e",
		"126990": "33b98620-3fda-45f4-9e66-0603b764e7cd",
		"127263": "4f888a2a-163d-4a8c-b86d-ada87f30020a",
		"127520": "15dbab2f-e7e9-4f2b-a6ba-bbcfde3faa99",
		"127813": "622b7286-13c5-4c5d-ab1e-b0f09ea1198f",
		"128070": "01ef7890-ae27-4d12-89da-68932df76f77",
		"128363": "b4f4a98e-f97d-4f8d-96cc-87a061a9bd2c",
		"128636": "9e088f29-b265-499b-8d2b-b527856fdbeb",
		"128849": "f1a21b66-fcdd-4ab5-8b49-4096e877fad3",
		"129122": "ad52cc3b-f24c-4a9e-ac96-4a5acac61463",
		"129395": "1b06548a-cc4f-41db-a56c-be2abc024ab3",
		"129650": "f16ce3f7-5578-48b1-9ac5-f7b67560cc7d",
		"129887": "6d6f75c8-8d7f-4165-a54a-3995b69b064b",
		"130144": "412a5623-12dd-4cff-931f-ce31ad897038",
		"130381": "aeddf116-7626-464f-a5e3-1a8787a46171",
		"131190": "c1dd371d-a65b-442c-9255-e262c3e1aa7c",
		"133572": "e91d7439-0c78-474a-9ecb-112d8ef87bc5",
		"133845": "5033c8d4-3ec0-4980-86d5-9daed1910ef8",
		"134100": "0fb0c5be-5999-46d4-8c1c-93507d7ee489",
		"134373": "e293dbd6-3d3b-4ba5-a596-e567ece88b9d",
		"139868": "c38f9312-5d03-428d-b510-5206953f1b6f",
		"140075": "b97af606-2279-43d7-9f21-a565d554746e",
		"140312": "5a6d605d-02c3-4b4c-9079-35b06e44ba92",
		"140585": "d5713d38-75c8-45f0-99b8-7f4055bd54a7",
		"140812": "127b8ddd-769a-4c4b-8556-cb15c4ee28ec",
		"141069": "151a44b8-646b-49dc-8990-508c908c7e0c",
		"141276": "82281427-f1c5-4af0-aebe-13c76aaac405",
		"141549": "7a4beb16-ccf4-4f6c-be64-38f633a9e3d3",
		"141758": "03116cee-ed3a-4785-a450-ed8d39a4bd82",
		"141995": "4731e81a-beea-48eb-ab06-44f209ac5733",
		"142268": "e261f2f2-e5e1-4dec-9d0c-707b7248e004",
		"142525": "a03732d3-56dd-4cbb-9b3f-c7939ba642e3",
		"142798": "b77b5ace-a3f9-452a-80a6-d40cb56faf97",
		"143091": "0149dfc5-3f21-4940-89e6-020fdeb7c33d",
		"143292": "36d76bd4-8943-40be-b91e-d65ae8b78f3d",
		"143549": "74a3f4d0-be95-4d06-8ee3-9b65fae3d54b",
		"143822": "1154210d-c25a-4fb6-8312-c9345f8408ec",
		"144115": "bdd22ff4-b9d8-475e-9cc8-6249502dba5a",
		"144358": "9b0c5beb-8c49-4903-ab8b-eea069f8e3e8",
		"146501": "f7c233b9-5307-4407-8d24-78ec10dc4a64",
		"148228": "9c94ab68-972e-4834-9cf2-7d93474317a3",
		"148485": "004f3c20-6ecb-4128-b4f6-8b30c01df9e4",
		"148686": "3e3bdb26-3510-4dfb-bcbb-d22e5faba17e",
		"148923": "a39b2940-6e77-4fd0-bcd0-8cf0362655b6",
		"149160": "dae43fe3-579c-4c22-a51d-b2f363deffae",
		"149415": "05cd5e6c-7046-4b50-9976-d1c8b442b8cb",
		"149652": "2e61d547-a86a-4b5f-8b25-0ba1fd9fe9fd",
		"149945": "61658127-2227-49a9-bc14-1a9306c12f23",
		"150152": "2156d2be-030f-4b93-9e31-5711f595dbc2",
		"150425": "977ec61f-4931-44e1-a4c4-f189d5e8204f",
		"151932": "464cc939-f3fb-40aa-8bb9-80f9507a2b6d",
		"152121": "826bf456-3fab-48e0-a14f-0f92604c3cd8",
		"152358": "146a8db5-2a11-46f8-b7bb-10cf3faa71f5",
		"152615": "e1c7708b-8c1c-44c2-9534-1fca7e387ed3",
		"155056": "17735608-1a14-44ab-afe2-767ea1a99489",
		"155329": "604c4f3a-bb26-4a12-ba24-d39dd0f61969",
		"155824": "e14c0a9e-a1d2-4f18-afed-ebe693a346ec",
		"156079": "97549c43-d423-4348-a809-9f011fc12a57",
		"156372": "e7e2c317-d882-4b66-8bba-01b38212a720",
		"156561": "2f0a62d3-e438-4a6e-bee8-524e39b4db97",
		"158388": "d8839922-b5e7-4d35-85c4-ef34f3df1716",
		"158661": "a31645e6-c3d6-44d6-8dae-72a1acd78f26",
		"159008": "f0caa2ac-4352-493d-892b-94c458856d10",
		"159301": "53d2c3a9-2720-40d3-b2fc-d41565229837",
		"159574": "3416628c-1d86-468a-bd3c-cb91c95d1902",
		"159811": "aec114ed-e579-49dd-b12a-853270d85770",
		"160084": "f572e063-3db8-464a-9f30-808ba1655ea3",
		"162177": "2dacd551-5781-4821-9c9d-73ce2cf88e8a",
		"162470": "03736df9-edf2-413b-9e39-a8fe25851131",
		"162677": "18fca253-5c0c-4338-b42d-eb8d735d5011",
		"166032": "63ad5d96-dc6f-4d41-823f-0304867d6e41",
		"166325": "a0a852b0-5664-4401-840b-e9bbfa3f739c",
		"166582": "7a2fc81f-27e5-4c68-8a89-5009c9298185",
		"166855": "47ae4133-5d6d-4582-b5ee-e17260e922f2",
		"167056": "0d4a7503-ec27-4c18-8072-b9d6d8107e77",
		"167293": "2a041025-1543-4981-8fdf-9692dcb6e230",
		"167566": "a398626f-aea9-404a-aa7d-d12c5f8f1f39",
		"167767": "8b827fe8-1a82-478f-ba6f-8a21ba8bcfff",
		"168060": "135645b8-7cee-4273-a455-74b6cd4cb152",
		"168353": "394829d3-2398-4478-afad-05ef80ca1db2",
		"168590": "af3bd355-34b4-4c85-8071-92f422d5e2c6",
		"168863": "82d0eeed-a6f2-49f1-a8be-98a7bf1a95f2",
		"169106": "f67e9760-f54f-46a7-906d-bee4e6fd9aa2",
		"169379": "f5f97d02-f071-49ae-b939-9a26e16e40a8",
		"169586": "493df111-fb27-4993-9019-2cdfd2b00d70",
		"169787": "298de126-0cc4-4ae5-a457-3c82b95ce638",
		"170060": "bc15a48b-ab41-45a3-a62e-021712f780ee",
		"170353": "c88f4508-1ea5-4c10-9db7-98cd636125ec",
		"170568": "9bd4d23b-4ad6-44a2-80fe-3534a7ec184d",
		"170841": "92c7d3f7-fcdb-4d3a-9001-591ed0da9e79",
		"171216": "63fd8441-670e-48d0-aeb2-99386602f9a3",
		"171473": "4abb6f22-17d8-4ed7-a516-7cef3fd25070",
		"171700": "a721bb20-2bd9-453b-9eee-5e85a170da28",
		"171973": "a8c7c360-d33f-4b9f-8260-10ef84c89113",
		"172200": "41ce233b-0f7b-4c02-9b37-94e1dd6ebce0",
		"172493": "5aeb9b0b-28fa-4514-8529-c4a2cc33fb5e",
		"172748": "3bff3d8a-4e84-428b-8cc1-0ff0efbe398a",
		"173041": "c574dc11-2da2-47e5-9845-93604bb7c35c",
		"173314": "455a6349-7e85-4357-8a2d-0a77df6c45a1",
		"173551": "8d62ab94-fcb6-457c-8e29-767354c6b95b",
		"173844": "6b245576-6cc1-4f56-8f56-8ae3bed82f11",
		"174051": "fa72586c-f871-4b3a-8144-38e74c400525",
		"174288": "53a97643-282b-4896-bc59-af28f86089cf",
		"176471": "1d59c88f-12fb-4b0a-a62a-455699e1f164",
		"176764": "26418b2e-f66a-4b50-80ab-b1436d32b078",
		"178325": "32ea7462-1342-4ed8-a969-8f6394d7fcbf",
		"178562": "73aa0a94-a1f9-4bae-87b1-a6c882ed8f5d",
		"178769": "55686a77-7aea-470d-a5c5-7512b43aa41b",
		"179264": "93d43b91-b6f2-46db-834d-176026125777",
		"179465": "2192d30f-04d1-4c1e-8604-6029b1f1b907",
		"181296": "08dd85c0-a0d8-4ff2-8f76-277d37bbde8e",
		"183487": "96456883-0cc5-4399-90e3-245ba72bcac4",
		"183730": "ef4efdcf-7bc8-40e7-b7cb-de01e3d8b8a6",
		"184003": "f13c4953-7ae1-4dea-b777-813b977f572a",
		"184296": "13ea6d51-4207-4053-be78-2c6fee5aa1cc",
		"184533": "7afeb09d-62e8-4273-9567-d3ccaf82a26d",
		"184826": "db8161a6-478e-4cc3-b086-a98167e516f7",
		"185099": "3bcb932d-4eb4-4bab-a6bf-a7c894940752",
		"185356": "7c78a875-6f5d-43d2-8ac7-26b59383f5c8",
		"185631": "8cc724cc-489b-4029-b841-7b174356569e",
		"185904": "4f16fe48-19f4-4fb4-8a0b-aac3bcea020b",
		"186197": "c5679802-0fdd-4614-916a-e34649c6d013",
		"186434": "2fa4160b-e788-4e99-af89-5055ae3b9e71",
		"186727": "ff73e28d-1842-42e1-bac8-c03938d12f7a",
		"186984": "94208e04-a63b-44e2-81bb-591b86d59bda",
		"187257": "c7fa9c69-af4d-4033-8d16-dcbdfdf11624",
		"187494": "191bc881-45fb-4381-9e50-9613203664d2",
		"187767": "70903c2a-5883-4556-9f78-53d97c3fcdba",
		"188060": "28c0e73d-e264-48e4-af35-06a4bbd3283b",
		"188317": "4e8998df-7a39-40ad-8782-1cc91b479e07",
		"188590": "cfee6709-2d29-4fe4-8766-08b14031f2d5",
		"188779": "4d9f6cfb-6224-457c-9ec5-8fc55df2a593",
		"189036": "df076648-f9aa-4009-915f-391fe90f6175",
		"189243": "d6e5f65c-589d-49b9-81cc-b711538ddbba",
		"189432": "a07e495e-560d-4bfd-aaf4-27f4d84a60fb",
		"189705": "be9a8f81-26d2-4125-be4a-a4f2389ae0f6",
		"189912": "d7f1c99a-3b20-42e5-86ba-8d1a26714e76",
		"190407": "3ed851dc-f466-4007-bb3a-ba9a2167a417",
		"190596": "95f53643-0d9f-446d-98d3-47a14be1c249",
		"192105": "af7a3bf5-4c7c-4b96-a64c-301efaec1599",
		"192398": "ce7435c0-318b-4dcb-ad64-996f4da767e9",
		"192691": "ad24a40d-c7f6-446d-b4f3-0c74064bbb53",
		"192948": "31ebe5bb-5db7-4867-b0b4-edbdfaae8891",
		"193155": "9aa1f077-25f8-469c-858b-f9d73bee2c13",
		"193448": "ab7bebd0-8c9a-4371-9829-f5fa381892e6",
		"193705": "9c27bdf6-fd2b-4f4e-9ea1-7a6eb80b7b18",
		"193980": "c9697ac6-ec50-4ff4-bb71-507f0c0e738f",
		"194273": "699973ff-4e7c-4e4f-be87-d6c4fb896bc0",
		"194724": "ae3cdaec-49d5-4ff9-aaa3-9ba26f4d0fb1",
		"195017": "7be5973f-071f-4b5b-8742-09d4a69312e7",
		"195290": "1a04222e-a8e3-4e1b-a8fc-15263bd5ad71",
		"195497": "a8653465-9ace-4c35-b0e0-0f6bdfc4765f",
		"198174": "5f4e1c08-beef-4981-adfe-e1f7d5f5c3ea",
		"198401": "e1c9c6e6-9272-41d2-a555-6e1cabf4b98a",
		"198746": "9cfa6cdf-6b3f-4a32-9774-685652e5839b",
		"198983": "55ad897f-d0f1-47c1-8890-6f821d3c7173",
		"199210": "7b480a47-426d-4be7-a0cd-783195df3e23",
		"199437": "60031680-751d-416a-a18c-da11be831625",
		"199674": "da82d560-e9b8-4231-b05d-62a4140841f8",
		"200101": "d7308b0c-37e6-4fc0-ad8d-051ed1c3a3bc",
		"200374": "5d2a84d0-7f41-4d39-9ea1-a8a683e2b047",
		"202155": "d91bdc67-7601-4e3e-abb4-f7ec015a2cdf",
		"202448": "f678078d-2a72-407a-8ff5-43fce8b8da1d",
		"202705": "587272d1-0ac1-4e59-aeb3-2324ae1ccd48",
		"202942": "34183f3c-218e-4e3b-98f7-b1ad610f8528",
		"203215": "1a037d41-fbc8-4b34-8116-34fd4b611a0b",
		"203488": "e03ca457-a31f-4607-a013-4a0eceeb5180",
		"203761": "01eb6101-e8df-4d5c-bfab-35ca685ba950",
		"203962": "e4304f53-ec30-4b95-8f91-dec43b564c1c",
		"204189": "cc1ba43c-cc84-40d8-be54-ed3207df1ff6",
		"204462": "b86f4aad-4880-4852-91d1-15d0ed03221f",
		"206719": "26134637-f6af-43a5-ad52-4b04d80ed043",
		"206974": "d71ef22b-1cd5-4dfb-a348-4a44f42d49b7",
		"207247": "d01fa2aa-ae86-48cd-beef-1137eec76836",
		"207520": "929835a0-ee9b-4b5f-aa0b-ca3ac51e45b9",
		"207757": "cf639887-8a05-4fe6-9de8-994fcd1c5f6a",
		"207994": "3a4a1f44-3753-408d-874c-adf2e1b69001",
		"208267": "7a006257-aea8-4215-9313-51ea2682ec02",
		"208482": "badbdfab-4014-43b4-abaa-0c57ccf10ac0",
		"208739": "5e671f54-5b3c-430d-8c08-37ce8aa952f5",
		"208994": "6edb8250-0404-4063-82e0-a848f8c92d36",
		"209231": "f5d387a1-5c7c-4951-8d18-0289bd63f46d",
		"210938": "c3c97f0e-7408-4d46-a10c-4b2b7efd4a25",
		"211211": "046b54a2-854c-4284-adcc-1aebe51b7458",
		"211504": "b41ff2a9-3c47-4d36-9c1b-77404740eaa1",
		"211761": "206b1748-f150-4400-b248-cb4447868cac",
		"211998": "e9069896-8415-49e4-9675-dd058751de67",
		"212255": "b6769595-342f-41c8-aa71-ba582c99e4f5",
		"212462": "00ebf215-c8fc-48cc-804f-9b4c4859928f",
		"212755": "5d435eb4-d4d8-405a-b45b-5779aa8f6145",
		"251187": "e5a24c03-5a86-4479-953a-0adbfedad2af",
		"264836": "9f0f3d04-aa5f-4632-af04-4a5a433b068e",
		"404268": "836130fa-d9fd-4889-b85b-031dbf78a461",
		"406763": "4145c7a8-d6ff-4549-8bdf-c24075fb4eac",
		"416519": "8b87b7a1-84d2-4a04-a1fa-161307f311ae",
		"474106": "98451fb6-5523-43db-aee3-a5f57b68cc27",
		"622778": "9bf3eaa5-45c0-4aa7-9749-df9d077ace08"
	};

var express_data = Object.entries(express_name).reduce((acc,[k,v])=>( {...acc,[k]:testData[v]}),{});
//console.log(express_data);

// key: attribute name
// value: list of express ids that have given attribute
data_express_obj = {};
Object.entries(express_data).forEach(function(el){
	if(data_express_obj[el[1]]==undefined){
		data_express_obj[el[1]] = []
	}
	data_express_obj[el[1]].push(el[0]);
});
console.log(data_express_obj);

$("#greenCount").html(data_express_obj['Green'].length);
$("#redCount").html(data_express_obj['Red'].length);
$("#blueCount").html(data_express_obj['Blue'].length);
$("#greyCount").html(data_express_obj['Grey'].length);

</script>



<script type="module">
	import {
    	AmbientLight,
		AxesHelper,
		DirectionalLight,
		GridHelper,
		PerspectiveCamera,
		Scene,
		WebGLRenderer,
	} from "./three/build/three.module";
	import {
		OrbitControls
	} from "./three/examples/jsm/controls/OrbitControls.js";

  	import * as THREE from './three/build/three.module';

//Creates the Three.js scene
const scene = new Scene();

//Object to store the size of the viewport
const size = {
width: window.innerWidth/2,
height: window.innerHeight,
};

//Creates the camera (point of view of the user)
const aspect = size.width / size.height;
const camera = new PerspectiveCamera(75, aspect);
camera.position.z = 15;
camera.position.y = 13;
camera.position.x = 8;

//Creates the lights of the scene
const lightColor = 0xffffff;

const ambientLight = new AmbientLight(lightColor, 0.5);
scene.add(ambientLight);

const directionalLight = new DirectionalLight(lightColor, 1);
directionalLight.position.set(0, 10, 0);
directionalLight.target.position.set(-5, 0, 0);
scene.add(directionalLight);
scene.add(directionalLight.target);

//Sets up the renderer, fetching the canvas of the HTML
const threeCanvas = document.getElementById("three-canvas");
const renderer = new WebGLRenderer({
	canvas: threeCanvas,
	alpha: true
});

renderer.setSize(size.width, size.height);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

//Creates grids and axes in the scene
const grid = new GridHelper(50, 30);
scene.add(grid);

const axes = new AxesHelper();
axes.material.depthTest = false;
axes.renderOrder = 1;
scene.add(axes);


//Creates the orbit controls (to navigate the scene)
const controls = new OrbitControls(camera, threeCanvas);
controls.enableDamping = true;
controls.target.set(-2, 0, 0);

//Animation loop
const animate = () => {
	controls.update();
	renderer.render(scene, camera);
	requestAnimationFrame(animate);
};

animate();

//Adjust the viewport to the size of the browser
window.addEventListener("resize", () => {
size.width = window.innerWidth/2;
size.height = window.innerHeight;
camera.aspect = size.width / size.height;
camera.updateProjectionMatrix();
renderer.setSize(size.width, size.height);
});


import { IFCLoader } from "./three/examples/jsm/loaders/IFCLoader.js";
import { IFCBUILDINGELEMENTPROXY } from "./three/examples/jsm/loaders/ifc/web-ifc-api";


//Sets up the IFC loading
const ifcModels = [];
const ifcLoader = new IFCLoader();
ifcLoader.ifcManager.setWasmPath("./three/examples/jsm/loaders/ifc/");


const greenMaterial = new THREE.MeshLambertMaterial({
	transparent: false,
	color: 	0x008000,
	depthTest: false
});

ifcLoader.load(
    "./models/66HB_test5.ifc",
    (ifcModel) => {
		var modelID = ifcModel.modelID;
		ifcModels.push(ifcModel);
		console.log(ifcModels);

		// trying to have model load with colors
		ifcModel.createSubset({
			modelID:modelID,
			ids:data_express_obj['Green'],
			material:greenMaterial,
			scene:scene,
			removePrevious:true
			customID: "greenItems"
			});
		scene.add(ifcModel);

		
	}

);

const highlightMaterial = new THREE.MeshPhongMaterial( { color: 0xff00ff, depthTest: false, transparent: true, opacity: 0.3 } );
const raycaster = new THREE.Raycaster();
raycaster.firstHitOnly = true;
const mouse = new THREE.Vector2();


const redMaterial = new THREE.MeshLambertMaterial({
	transparent: false,
	color: 0xff0000,
	depthTest: false
});
const blueMaterial = new THREE.MeshLambertMaterial({
	transparent: false,
	color: 0x0000ff,
	depthTest: false
});
const greyMaterial = new THREE.MeshLambertMaterial({
	transparent: false,
	color: 0x808080,
	depthTest: false
});

function cast(event) {

	// Computes the position of the mouse on the screen
	const bounds = threeCanvas.getBoundingClientRect();

	const x1 = event.clientX - bounds.left;
	const x2 = bounds.right - bounds.left;
	mouse.x = (x1 / x2) * 2 - 1;

	const y1 = event.clientY - bounds.top;
	const y2 = bounds.bottom - bounds.top;
	mouse.y = -(y1 / y2) * 2 + 1;

	// Places it on the camera pointing to the mouse
	raycaster.setFromCamera(mouse, camera);

	// Casts a ray
	return raycaster.intersectObjects(ifcModels);
}

function selectObject(event) {
	if ( event.button != 0 ) return;
    const found = cast(event)[0];
    if (found) {
        const index = found.faceIndex;
        const geometry = found.object.geometry;
        const ifc = ifcLoader.ifcManager;
        const id = ifc.getExpressId(geometry, index);
       

		const modelID = found.object.modelID;
		ifcLoader.ifcManager.createSubset( { modelID, ids: [ id ], scene, removePrevious: true, material: highlightMaterial } );
		const props = ifcLoader.ifcManager.getItemProperties( modelID, id, true );
		console.log( props );
		
		renderer.render( scene, camera );
    }
}

window.onpointerdown = selectObject;

function onProgress(event) {
	console.log(event);
	const progress = event.total / event.progress * 100;
	console.log("Progress: ", progress, "%");
}


// button click event callback to make only elements with given attr colored
window.FilterModel= function(f){
	console.log("we are in filter model function");
	console.log(f);
	const greenMaterial = new THREE.MeshLambertMaterial({
		transparent: false,
		color: 0xff88ff,
		depthTest: false
	});
	// filter is a string indicating attribute green, blue, red, grey
	var filterExpressIDs = data_express_obj[f]; // list of expressIDs
	console.log(filterExpressIDs);
	//console.log(ifcModels[0]);
	var modelID = ifcModels[0].modelID;
	
	ifcLoader.ifcManager.createSubset( { 
		modelID:modelID, 
		ids: filterExpressIDs, 
		scene: scene, 
		removePrevious: false, 
		material: greenMaterial 
	} );
	
	// renderer.render( scene, camera );


}

</script>