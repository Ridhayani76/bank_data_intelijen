<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-penerangan-penyuluhan",
  *      operationId="browseR.IN.22-RegisterPelaksanaanKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"register-penerangan-penyuluhan"},
  *      summary="Browse R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Returns list of R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/register-penerangan-penyuluhan/read?slug=register-penerangan-penyuluhan&id={id}",
  *      operationId="readR.IN.22-RegisterPelaksanaanKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"register-penerangan-penyuluhan"},
  *      summary="Get R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum based on id",
  *      description="Returns R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/register-penerangan-penyuluhan/add",
  *      operationId="addR.IN.22-RegisterPelaksanaanKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"register-penerangan-penyuluhan"},
  *      summary="Insert new R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Insert new R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"surat perintah":"Abc", "sasaran kegiatan":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "materi":"Abc", "jumlah peserta":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-penerangan-penyuluhan/edit",
  *      operationId="editR.IN.22-RegisterPelaksanaanKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"register-penerangan-penyuluhan"},
  *      summary="Edit an existing R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Edit an existing R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"surat perintah":"Abc", "sasaran kegiatan":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "materi":"Abc", "jumlah peserta":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-penerangan-penyuluhan/delete",
  *      operationId="deleteR.IN.22-RegisterPelaksanaanKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"register-penerangan-penyuluhan"},
  *      summary="Delete one record of R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Delete one record of R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-penerangan-penyuluhan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-penerangan-penyuluhan/delete-multiple",
  *      operationId="deleteMultipleR.IN.22-RegisterPelaksanaanKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"register-penerangan-penyuluhan"},
  *      summary="Delete multiple record of R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Delete multiple record of R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-penerangan-penyuluhan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-penerangan-penyuluhan/sort",
  *      operationId="sortR.IN.22-RegisterPelaksanaanKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"register-penerangan-penyuluhan"},
  *      summary="Sort existing R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Sort existing R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-penerangan-penyuluhan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "surat perintah":"Abc", "sasaran kegiatan":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "materi":"Abc", "jumlah peserta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "surat perintah":"Abc", "sasaran kegiatan":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "materi":"Abc", "jumlah peserta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="surat perintah"), 
  *                         @OA\Property(type="string", property="sasaran kegiatan"), 
  *                         @OA\Property(type="string", property="waktu"), 
  *                         @OA\Property(type="string", property="tempat"), 
  *                         @OA\Property(type="string", property="materi"), 
  *                         @OA\Property(type="string", property="jumlah peserta"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */